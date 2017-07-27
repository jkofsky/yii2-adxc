<?php

use yii\db\Migration;

class m170726_193051_load_subnetTable extends Migration {

    public function safeUp() {
        $this->insert('{{%subnet}}', [
            'id' => 1,
            'name' => 'Network Management',
            'network_id' => '192.168.1.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.1.254',
            'broadcast_address' => '192.168.1.255',
            'cidr_notation' => '192.168.1.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 1,
            'vlan_name' => 'DEFAULT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 2,
            'name' => 'ADX On-Air Audio Net',
            'network_id' => '192.168.2.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.2.254',
            'broadcast_address' => '192.168.2.255',
            'cidr_notation' => '192.168.2.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 2,
            'vlan_name' => 'AUDIO_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 4,
            'name' => 'Guest WiFi',
            'network_id' => '192.168.4.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.4.254',
            'broadcast_address' => '192.168.4.255',
            'cidr_notation' => '192.168.4.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 4,
            'vlan_name' => 'GUEST_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 87,
            'name' => 'Wheatstone (AoIP) Audio Network',
            'network_id' => '192.168.87.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.87.1',
            'broadcast_address' => '192.168.87.255',
            'cidr_notation' => '192.168.87.0/24',
            'dhcp_range' => 'none',
            'vlan_id' => 87,
            'vlan_name' => 'WHEAT_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 168,
            'name' => 'ADX Main Office',
            'network_id' => '192.168.168.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.168.254',
            'broadcast_address' => '192.168.168.255',
            'cidr_notation' => '192.168.168.0/24',
            'dhcp_range' => '100-199',
            'vlan_id' => 168,
            'vlan_name' => 'OFFICE_VLAN',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 10,
            'name' => 'Escambia Emergency Operations Center (EEOC)',
            'network_id' => '192.168.10.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.10.254',
            'broadcast_address' => '192.168.10.255',
            'cidr_notation' => '192.168.10.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 11,
            'name' => 'Santa Rosa Emergency Operations Center (SREOC)',
            'network_id' => '192.168.11.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.11.254',
            'broadcast_address' => '192.168.11.255',
            'cidr_notation' => '192.168.11.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 12,
            'name' => 'WYCT Transmitter Site',
            'network_id' => '192.168.12.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.12.254',
            'broadcast_address' => '192.168.12.255',
            'cidr_notation' => '192.168.12.0/24',
            'dhcp_range' => '200-250',
        ]);

        $this->insert('{{%subnet}}', [
            'id' => 13,
            'name' => 'WNRP Transmitter Site',
            'network_id' => '192.168.13.0',
            'subnet_mask' => '255.255.255.0',
            'gateway' => '192.168.13.254',
            'broadcast_address' => '192.168.13.255',
            'cidr_notation' => '192.168.13.0/24',
            'dhcp_range' => '200-250',
        ]);
    }

    public function safeDown() {
        $this->truncateTable('{{%subnet}}');
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m170726_193051_load_subnetTable cannot be reverted.\n";

      return false;
      }
     */
}
