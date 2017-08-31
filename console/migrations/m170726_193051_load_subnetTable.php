<?php

use yii\db\Migration;

class m170726_193051_load_subnetTable extends Migration
{

    public function safeUp()
    {
        $this->insert('{{%subnet}}', [
            'name' => 'ADX Management Network',
            'short_name' => 'ADXC-Net',
            'network_id' => '192.168.1.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.1.9',
            'gateway_id' => '9',
            'broadcast_address' => '192.168.1.255',
            'cidr_block' => '192.168.1.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 1,
            'vlan_name' => 'DEFAULT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'ADX On-Air Audio Network',
            'short_name' => 'AudioNet',
            'network_id' => '192.168.2.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.2.9',
            'gateway_id' => '9',
            'broadcast_address' => '192.168.2.255',
            'cidr_block' => '192.168.2.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 2,
            'vlan_name' => 'AUDIO_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Guest Network (WiFi)',
            'short_name' => 'GuestNet',
            'network_id' => '192.168.4.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.4.9',
            'gateway_id' => '9',
            'broadcast_address' => '192.168.4.255',
            'cidr_block' => '192.168.4.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 4,
            'vlan_name' => 'GUEST_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Wheatstone (AoIP) Audio Network',
            'short_name' => 'WheatNet',
            'network_id' => '192.168.87.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.87.1',
            'gateway_id' => '1',
            'broadcast_address' => '192.168.87.255',
            'cidr_block' => '192.168.87.0/24',
            'dhcp_range' => 'none',
            'vlan_id' => 87,
            'vlan_name' => 'WHEAT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'ADX Main Office Network',
            'short_name' => 'OfficeNet',
            'network_id' => '192.168.168.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.168.9',
            'gateway_id' => '9',
            'broadcast_address' => '192.168.168.255',
            'cidr_block' => '192.168.168.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 168,
            'vlan_name' => 'OFFICE_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Escambia Emergency Operations Center (EEOC)',
            'short_name' => 'EEOC-Net',
            'network_id' => '192.168.10.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.10.254',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.10.255',
            'cidr_block' => '192.168.10.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Santa Rosa Emergency Operations Center (SREOC)',
            'short_name' => 'SREOC-Net',
            'network_id' => '192.168.11.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.11.254',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.11.255',
            'cidr_block' => '192.168.11.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'WYCT Transmitter Site',
            'short_name' => 'WYCT-Net',
            'network_id' => '192.168.12.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.12.254',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.12.255',
            'cidr_block' => '192.168.12.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'WNRP Transmitter Site',
            'short_name' => 'WNRP-Net',
            'network_id' => '192.168.13.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.13.254',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.13.255',
            'cidr_block' => '192.168.13.0/24',
            'dhcp_range' => '200-250',
        ]);
        $this->insert('{{%subnet}}', [
            'name' => 'WNRP Transmitter Site - Jodran Net1',
            'short_name' => 'JordanNet1',
            'network_id' => '192.168.14.0',
            'subnet_mask' => '255.255.255.128',
            'gateway' => '192.168.14.2',
            'gateway_id' => '2',
            'broadcast_address' => '192.168.14.128',
            'cidr_block' => '192.168.14.0/25',
            'dhcp_range' => 'n/a',
        ]);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%subnet}}');
    }

}
