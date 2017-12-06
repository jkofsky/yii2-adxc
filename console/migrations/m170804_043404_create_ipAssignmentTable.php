<?php

use yii\db\Migration;

/**
 * Class m170804_043404_create_ipAssignmentTable
 */
class m170804_043404_create_ipAssignmentTable extends Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%ip_assignment}}', true) !== null) {
            $this->dropTable('{{%ip_assignment}}');
        }

        $this->createTable('{{%ip_assignment}}', [
            'id' => $this->primaryKey()->unsigned(),
            'host_type_id' => $this->integer(10)->unsigned()->null(),
            'subnet_id' => $this->integer(10)->unsigned()->null(),
            'ipv4_address' => $this->string(16)->notNull(),
            //'ipv6_address'=>  $this->string(40)->null(),
            'host_type' => "ENUM('Host','Network','Server','Printer','Power','WheatNet') NOT NULL DEFAULT 'Host'",
            'host_name' => $this->string(32)->notNull(),
            'host_purpose' => $this->string(64)->notNull(),
            'host_location' => $this->string(64)->notNull(),
            'port_access_info' => $this->text()->null(),
            'public_access_ip' => $this->string(16)->notNull()->defaultValue('None'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);
        $this->createIndex('idx_ip_address', '{{%ip_assignment}}', 'subnet_id, ipv4_address', true);

        // add foreign key for a table relation to the '{{%subnet}}' table
        $this->addForeignKey(
                'fk_assignment_to_subnet', '{{%ip_assignment}}', 'subnet_id', '{{%subnet}}', 'id', 'SET NULL', 'CASCADE'
        );
        
        // add foreign key for a table relation to the '{{%subnet}}' table
        $this->addForeignKey(
                'fk_assignment_to_host', '{{%ip_assignment}}', 'host_type_id', '{{%ip_host}}', 'id', 'SET NULL', 'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_assignment_to_subnet', '{{%ip_assignment}}');
        $this->dropForeignKey('fk_assignment_to_host', '{{%ip_assignment}}');
        $this->dropTable('{{%ip_assignment}}');
    }

}
