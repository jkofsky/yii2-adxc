<?php

use yii\db\Migration;

/**
 * Class m170731_193051_load_ipHostTable
 */
class m170731_193051_load_ipHostTable extends Migration {

    public function safeUp() {
        $this->insert('{{%ip_host}}', [
            'host_type' => 'Host',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%ip_host}}', [
            'host_type' => 'Server',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%ip_host}}', [
            'host_type' => 'Network',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%ip_host}}', [
            'host_type' => 'Printer',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%ip_host}}', [
            'host_type' => 'PDU',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%ip_host}}', [
            'host_type' => 'Wheatstone',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function safeDown() {
        $this->truncateTable('{{%ip_host}}');
    }

}
