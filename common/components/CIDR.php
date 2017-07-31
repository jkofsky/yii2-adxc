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
 * @filesource ipHelper.php
 * @author     Jeff Kofsky
 * 
 * @version    v1.0.2 Modified to work with Yii2 and PHP 5+
 * @author     Jeff Kofsky
 */
class CIDR {

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
     * @param $int integer Between 0 and 32.
     * @return string Netmask ip address
     */
    public static function CIDRtoMask($int) {
        return long2ip(-1 << (32 - (int) $int));
    }

    /**
     * Return the number of bits that are set in an integer.
     * 
     * Usage: CIDR::countSetBits(ip2long('255.255.252.0'));
     * Result:
     * int(22)
     * 
     * @see http://stackoverflow.com/questions/109023/best-algorithm-to-count-the-number-of-set-bits-in-a-32-bit-integer
     *
     * @access public
     * @static
     * 
     * @param $int integer a number
     * @return integer number of bits set.
     */
    public static function countSetbits($int) {
        $int = $int - (($int >> 1) & 0x55555555);
        $int = ($int & 0x33333333) + (($int >> 2) & 0x33333333);
        return (($int + ($int >> 4) & 0xF0F0F0F) * 0x1010101) >> 24;
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
     * @param $netmask string a 1pv4 formatted ip address.
     * @return boolean True if a valid netmask.
     */
    public static function validNetMask($netmask) {
        $netmask = ip2long($netmask);
        $neg = ((~(int) $netmask) & 0xFFFFFFFF);
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
     * @param $netmask string a 1pv4 formatted ip address.
     * @return integer CIDR number.
     */
    public static function maskToCIDR($netmask) {
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
     * @param $ipinput string a IPv4 formatted ip address.
     * @param $netmask string a 1pv4 formatted ip address.
     * @return string CIDR block.
     */
    public static function alignedCIDR($ipinput, $netmask) {
        $alignedIP = long2ip((ip2long($ipinput)) & (ip2long($netmask)));
        return "$alignedIP/" . self::maskToCIDR($netmask);
    }

    /**
     * Check whether an IP is within a CIDR block.
     * 
     * Usage: CIDR::IPisWithinCIDR('127.0.0.33','127.0.0.1/24');
     *        CIDR::IPisWithinCIDR('127.0.0.33','127.0.0.1/27');
     * Result:
     * bool(true)
     * bool(false)
     *
     * @access public
     * @static
     *  
     * @param $ipinput string a IPv4 formatted ip address.
     * @param $cidr string a IPv4 formatted CIDR block. Block is aligned during execution.
     * @return string CIDR block.
     */
    public static function IPisWithinCIDR($ipinput, $cidr) {
        $cidr = explode('/', $cidr);
        $cidr = self::alignedCIDR($cidr[0], self::CIDRtoMask((int) $cidr[1]));
        $cidr = explode('/', $cidr);
        $ipinput = (ip2long($ipinput));
        $ip1 = (ip2long($cidr[0]));
        $ip2 = ($ip1 + pow(2, (32 - (int) $cidr[1])) - 1);
        return (($ip1 <= $ipinput) && ($ipinput <= $ip2));
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
     * @param $ipinput string a IPv4 formatted ip address.
     * @return integer CIDR number.
     */
    public static function maxBlock($ipinput) {
        return self::maskToCIDR(long2ip(-(ip2long($ipinput) & -(ip2long($ipinput)))));
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
     * @param $startIPinput string a IPv4 formatted ip address.
     * @param $startIPinput string a IPv4 formatted ip address.
     * @return array CIDR blocks in a numbered array.
     */
    public static function rangeToCIDRList($startIPinput, $endIPinput = NULL) {
        $start = ip2long($startIPinput);
        $end = (empty($endIPinput)) ? $start : ip2long($endIPinput);
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
     * @access public
     * @static
     * 
     * @param $cidr string CIDR block
     * @return array low end of range then high end of range.
     */
    public static function cidrToRange($cidr) {
        $range = array();
        $cidr = explode('/', $cidr);
        $range[0] = long2ip((ip2long($cidr[0])) & ((-1 << (32 - (int) $cidr[1]))));
        $range[1] = long2ip((ip2long($cidr[0])) + pow(2, (32 - (int) $cidr[1])) - 1);
        return $range;
    }

}
