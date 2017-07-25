<?php

use yii\db\Migration;

class m170715_190741_create_announcement extends Migration {

    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%announcement%}}', true) !== null) {
            $this->dropTable('{{%announcement%}}');
        }

        $this->createTable('{{%announcement%}}', [
            'id' => $this->primaryKey()->unsigned(),
            'start_date' => $this->integer()->notNull(),
            'end_date' => $this->integer()->null()->comment('NULL means Until Further Notice'),
            'announcement' => $this->string()->notNull(),
            'posted_by' => $this->integer(10)->unsigned(),
                ], $tableOptions);
        
        $this->addForeignKey('fk_announcement_created_by', '{{%announcement}}', 'posted_by', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown() {
        $this->dropForeignKey('fk_announcement_created_by', '{{%announcement}}');
        $this->dropTable('{{%announcement%}}');
    }

}
