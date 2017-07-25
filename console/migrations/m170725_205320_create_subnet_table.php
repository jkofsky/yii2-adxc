<?php

use yii\db\Migration;

class m170725_205320_create_subnet_table extends Migration {

    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('{{%subnet%}}', [
            'id' => $this->smallInteger(3)->unsigned(),
            'name' => $this->string(50)->notNull(),
            'subnet_id' => $this->string(15)->null(),
            'subnet_mask' => $this->string(15)->notNull()->defaultValue('255.255.255.0'),
            'gateway' => $this->string(15)->notNull(),
            'broadcast_address' => $this->string(15)->notNull()->defaultValue('192.168.#.255'),
            'cidr_notation' => $this->string(24)->notNull(),
            'dhcp_range' => $this->string(24)->null(),
            'vlan_id' => $this->smallInteger(3)->unsigned()->null(),
            'vlan_name' => $this->string(32)->null(),
                ], $tableOptions);
        $this->addPrimaryKey('PRIMARY KEY', '{{%subnet}}', 'id');
    }

    public function safeDown() {
        $this->dropTable('{{%subnet}}');
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m170725_205320_create_subnet cannot be reverted.\n";

      return false;
      }
     */
}
