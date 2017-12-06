<?php

use yii\db\Migration;

/**
 * Class m171204_191754_create_podcastTable
 */
class m171204_191754_create_podcastTable extends Migration {

    /**
     * @inheritdoc
     */
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%podcast}}', true) !== null) {
            $this->dropTable('{{%podcast}}');
        }

        $this->createTable('{{%podcast}}', [
            'id' => $this->primaryKey()->unsigned(),
            'station'=>$this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);
        $this->createIndex('idx_name', '{{%podcast}}', 'name');
    }

    /**
     * @inheritdoc
     */
    public function safeDown() {
        return $this->dropTable('{{%podcast}}');
    }

}
