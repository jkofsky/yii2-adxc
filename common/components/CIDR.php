<?php

namespace common\components;

/**
 * Utility Functions for IPv4 IP addresses/CIDR Notation.
 *
 * @version    v1.0.0 Intial Release
 * @author     Jonavon Wilcox <jowilcox@vt.edu>
 * @copyright  Copyright (c) 2009 Jonavon Wilcox
 * 
 * @version    v1.0.1 Modified to work with Yii1.1
 * @filesource CIDR.php
 * @author     Jeff Kofsky
 * 
 * @version    v1.0.2 Modified to work with Yii2 and PHP 5+
 * @author     Jeff Kofsky
 */
class CIDR
{

    /**
     * Return a netmask string if given an integer between 0 and 32. I am
     * not sure how this works on 64 bit machines.
     * 
     * Usage: CIDR::CIDRtoMask(22);
     * Result:
     * string(13) "255.255.252.0"
     * 
     * @access public
     * @static
     * 
     * @param integer $cidrBlock Between 0 and 32.
     * @param boolean $asLong whether the return is longs or strings
     * @return string Netmask ip address
     */
    public static function CIDRtoMask($cidrBlock, $asLong = false)
    {
        $nm = (-1 << (32 - (int) $cidrBlock));
        if ($asLong) {
            return $nm;
        } else {
            return long2ip($nm);
        }
    }

    /**
     * Return the number of bits that are set in an integer.
     * 
     * Usage: CIDR::countSetBits(ip2long('255.255.252.0'));
     * Result:
     * int(22)
     * 
     * @see https://stackoverflow.com/questions/109023/how-to-count-the-number-of-set-bits-in-a-32-bit-integer#109117
     * @see https://stackoverflow.com/questions/16848931/how-to-fastest-count-the-number-of-set-bits-in-php
     * @access public
     * @static
     * 
     * @param integer $value 
     * @return integer number of bits set.
     */
    public static function countSetbits($value)
    {
//        $int = $value - (($value >> 1) & 0x55555555);
//        $int = ($int & 0x33333333) + (($int >> 2) & 0x33333333);
//        return (($int + ($int >> 4) & 0xF0F0F0F) * 0x1010101) >> 24;
        return substr_count(decbin($value), '1');
    }

    /**
     * Determine if a string is a valid netmask.
     * 
     * Usage: CIDR::validNetMask('255.255.252.0');
     *        CIDR::validNetMask('127.0.0.1');
     * Result:
     * bool(true)
     * bool(false)
     * 
     * @see http://www.actionsnip.com/snippets/tomo_atlacatl/calculate-if-a-netmask-is-valid--as2-
     * 
     * @access public
     * @static
     * 
     * @param string $netmask a IPv4 formatted ip address.
     * @return boolean True if a valid netmask.
     */
    public static function validNetMask($netmask)
    {
        $nmLong = ip2long($netmask);
        $neg = ((~(int) $nmLong) & 0xFFFFFFFF);
        return (($neg + 1) & $neg) === 0;
    }

    /**
     * Return a CIDR block number when given a valid netmask.
     * 
     * Usage: CIDR::maskToCIDR('255.255.252.0');
     * Result:
     * int(22)
     * 
     * @access public
     * @static
     * 
     * @param string $netmask a 1pv4 formatted ip address.
     * @return integer CIDR number.
     */
    public static function maskToCIDR($netmask)
    {
        if (self::validNetMask($netmask)) {
            return self::countSetBits(ip2long($netmask));
        } else {
            throw new Exception('Invalid Netmask');
        }
    }

    /**
     * Returns a valid CIDR block given a valid ip address and netmask.
     * 
     * Usage: CIDR::alignedCIDR('127.0.0.1','255.255.252.0');
     * Result:
     * string(12) "127.0.0.0/22"
     * 
     * @access public
     * @static
     * 
     * @param string $ipv4 a IPv4 formatted ip address.
     * @param string $netmask a 1pv4 formatted ip address.
     * @return string CIDR block.
     */
    public static function alignedCIDR($ipv4, $netmask)
    {
        $alignedIP = long2ip((ip2long($ipv4)) & (ip2long($netmask)));
        return "$alignedIP/" . self::maskToCIDR($netmask);
    }

    /**
     * Check whether an IP is within a CIDR block, 
     *  not including the Subnet ID and Broadcast addresses
     * 
     * Usage: CIDR::IPisWithinCIDR('127.0.0.33','127.0.0.1/24');
     *        CIDR::IPisWithinCIDR('127.0.0.33','127.0.0.1/27');
     * Result:
     * bool(true)
     * bool(false)
     * 
     * @see https://stackoverflow.com/questions/4931721/getting-list-ips-from-cidr-notation-in-php#42269989
     *
     * @access public
     * @static
     *  
     * @param string $ipv4 a IPv4 formatted ip address.
     * @param string $cidrIpv4 a IPv4 formatted CIDR block.
     * @return string CIDR block.
     */
    public static function IPisWithinCIDR($ipv4, $cidrIpv4)
    {
        $ipv4Long = (ip2long($ipv4));
        $range = self::cidrToRange($cidrIpv4, true);
        return (($ipv4Long > $range[0]) && ($ipv4Long < $range[1]));
    }

    /**
     * Determines the largest CIDR block that an IP address will fit into.
     * Used to develop a list of CIDR blocks.
     * 
     * Usage: CIDR::maxBlock("127.0.0.1");
     *        CIDR::maxBlock("127.0.0.0");
     * Result:
     * int(32)
     * int(8)
     * 
     * @access public
     * @static
     * 
     * @param string $ipv4 a IPv4 formatted ip address.
     * @return integer CIDR number.
     */
    public static function maxBlock($ipv4)
    {
        return self::maskToCIDR(long2ip(-(ip2long($ipv4) & -(ip2long($ipv4)))));
    }

    /**
     * Returns an array of CIDR blocks that fit into a specified range of
     * ip addresses.
     * 
     * Usage: CIDR::rangeToCIDRList("127.0.0.1","127.0.0.34");
     * Result:
     * array(7) {
     *   [0]=> string(12) "127.0.0.1/32"
     *   [1]=> string(12) "127.0.0.2/31"
     *   [2]=> string(12) "127.0.0.4/30"
     *   [3]=> string(12) "127.0.0.8/29"
     *   [4]=> string(13) "127.0.0.16/28"
     *   [5]=> string(13) "127.0.0.32/31"
     *   [6]=> string(13) "127.0.0.34/32"
     * }
     * 
     * @see http://null.pp.ru/src/php/Netmask.phps
     * 
     * @access public
     * @static
     * 
     * @param string $ipv4Start a IPv4 formatted ip address.
     * @param string $ipv4End a IPv4 formatted ip address.
     * @return array CIDR blocks in a numbered array.
     */
    public static function rangeToCIDRList($ipv4Start, $ipv4End = NULL)
    {
        $start = ip2long($ipv4Start);
        $end = (empty($ipv4End)) ? $start : ip2long($ipv4End);
        while ($end >= $start) {
            $maxsize = self::maxBlock(long2ip($start));
            $maxdiff = 32 - intval(log($end - $start + 1) / log(2));
            $size = ($maxsize > $maxdiff) ? $maxsize : $maxdiff;
            $listCIDRs[] = long2ip($start) . "/$size";
            $start += pow(2, (32 - $size));
        }
        return $listCIDRs;
    }

    /**
     * Returns an array of only two IPv4 addresses that have the lowest ip
     * address as the first entry. If you need to check to see if an IPv4
     * address is within range please use the IPisWithinCIDR method above.
     * 
     * Usage:  CIDR::cidrToRange("127.0.0.128/25");
     * Result:
     * array(2) {
     *   [0]=> string(11) "127.0.0.128"
     *   [1]=> string(11) "127.0.0.255"
     * }
     * 
     * @see https://stackoverflow.com/questions/4931721/getting-list-ips-from-cidr-notation-in-php#42269989
     * 
     * @access public
     * @static
     * 
     * @param string $ipv4 
     * @param boolean $asLong whether the return is longs or strings
     * @return array low end of range then high end of range.
     */
    public static function cidrToRange($ipv4, $asLong = false)
    {
        $cidrSplitPos = strpos($ipv4, '/');
        if ($cidrSplitPos) {
            $cidrNum = (1 << (32 - substr($ipv4, 1 + $cidrSplitPos))) - 1;
            $ipv4_asLong = ip2long(substr($ipv4, 0, $cidrSplitPos));
        } else {
            $cidrNum = 0;
            $ipv4_asLong = ip2long($ipv4);
        }
        $ipBlockMin = $ipv4_asLong & ~$cidrNum;
        $ipBlockMax = $ipBlockMin + $cidrNum;

        if ($asLong) {
//Array(2) of Decimal Values Range
            return [$ipBlockMin, $ipBlockMax];
        } else {
//Array(2) of Ipv4 Human Readable Range
            return [long2ip($ipBlockMin), long2ip($ipBlockMax)];
        }
    }

}
