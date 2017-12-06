<?php

use yii\db\Migration;

/**
 * Class m171204_173404_create_stationTable
 */
class m171204_173404_create_stationTable extends Migration {

    /**
     * @inheritdoc
     */
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%station}}', true) !== null) {
            $this->dropTable('{{%station}}');
        }

        $this->createTable('{{%station}}', [
            'id' => $this->primaryKey()->unsigned(),
            'call_letters' => $this->char(8)->notNull()->unique(),
            'name' => $this->string(65)->notNull(),
            'slogon' => $this->string(),
            'website'=>  $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
                ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown() {
        return $this->dropTable('{{%station}}');
    }

}
