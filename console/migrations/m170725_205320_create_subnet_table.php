<?php

use yii\db\Migration;

class m170725_205320_create_subnet_table extends Migration {

    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%subnet%}}', true) !== null) {
            $this->dropTable('{{%subnet%}}');
        }

        $this->createTable('{{%subnet%}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(50)->notNull(),
            'network_id' => $this->string(16)->null(),
            'subnet_mask' => $this->string(16)->notNull()->defaultValue('255.255.255.0'),
            'gateway' => $this->string(16)->notNull(),
            'broadcast_address' => $this->string(16)->notNull()->defaultValue('192.168.#.255'),
            'cidr_notation' => $this->string(24)->null(),
            'dhcp_range' => $this->string(16)->null(),
            'vlan_id' => $this->smallInteger(4)->unsigned()->null(),
            'vlan_name' => $this->string(32)->null(),
                ], $tableOptions);

    }

    public function safeDown() {
        $this->dropTable('{{%subnet}}');
    }

}
