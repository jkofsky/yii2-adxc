<?php

use yii\db\Migration;

class m170726_193051_load_subnetTable extends Migration {

    public function safeUp() {
        $this->insert('{{%subnet}}', [
            'name' => 'Network Management',
            'subnet_id' => '192.168.1.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.1.255',
            'cidr_notation' => '192.168.1.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 1,
            'vlan_name' => 'DEFAULT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'ADX On-Air Audio Net',
            'subnet_id' => '192.168.2.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.2.255',
            'cidr_notation' => '192.168.2.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 2,
            'vlan_name' => 'AUDIO_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Guest WiFi',
            'subnet_id' => '192.168.4.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.4.255',
            'cidr_notation' => '192.168.4.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 4,
            'vlan_name' => 'GUEST_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Wheatstone (AoIP) Audio Network',
            'subnet_id' => '192.168.87.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '1',
            'broadcast_address' => '192.168.87.255',
            'cidr_notation' => '192.168.87.0/24',
            'dhcp_range' => 'none',
            'vlan_id' => 87,
            'vlan_name' => 'WHEAT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'ADX Main Office',
            'subnet_id' => '192.168.168.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.168.255',
            'cidr_notation' => '192.168.168.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 168,
            'vlan_name' => 'OFFICE_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Escambia Emergency Operations Center (EEOC)',
            'subnet_id' => '192.168.10.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.10.255',
            'cidr_notation' => '192.168.10.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'Santa Rosa Emergency Operations Center (SREOC)',
            'subnet_id' => '192.168.11.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.11.255',
            'cidr_notation' => '192.168.11.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'WYCT Transmitter Site',
            'subnet_id' => '192.168.12.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.12.255',
            'cidr_notation' => '192.168.12.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'name' => 'WNRP Transmitter Site',
            'subnet_id' => '192.168.13.0',
            'subnet_mask' => '255.255.255.0',
            'gateway_id' => '254',
            'broadcast_address' => '192.168.13.255',
            'cidr_notation' => '192.168.13.0/24',
            'dhcp_range' => '200-250',
        ]);
    }

    public function safeDown() {
        $this->truncateTable('{{%subnet}}');
    }
}
