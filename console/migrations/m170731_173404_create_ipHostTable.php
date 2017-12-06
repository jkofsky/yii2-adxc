<?php

use yii\db\Migration;

/**
 * Class m170731_173404_create_ipHostTable
 */
class m170731_173404_create_ipHostTable extends Migration {

    /**
     * @inheritdoc
     */
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%ip_host}}', true) !== null) {
            $this->dropTable('{{%ip_host}}');
        }

        $this->createTable('{{%ip_host}}', [
            'id' => $this->primaryKey()->unsigned(),
            'host_type' => $this->string()->unique()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown() {
        return $this->dropTable('{{%ip_host}}');
    }

}
