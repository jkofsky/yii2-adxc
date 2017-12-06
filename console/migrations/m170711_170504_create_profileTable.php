<?php

use yii\db\Migration;
use yii\db\Expression;

/**
 * Class m170711_170504_create_profileTable
 */
class m170711_170504_create_profileTable extends Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%profile}}', true) !== null) {
            $this->dropTable('{{%profile}}');
        }
        $this->createTable('{{%profile}}', [
            'user_id' => $this->integer(10)->unsigned()->notNull(),
            'first_name' => $this->string(64)->notNull(),
            'last_name' => $this->string(64)->notNull(),
            'address' => $this->string(128)->null(),
            'city' => $this->string(64)->null(),
            'state' => $this->char(2)->notNull()->defaultValue('FL'),
            'postal_code' => $this->string(10)->null(),
            'cell_phone' => $this->string(16)->null(),
            'home_phone' => $this->string(16)->notNull()->defaultValue('See Cell'),
            'birth_date' => $this->integer()->null(),
            'aniversary_date' => $this->integer()->null(),
            'spouse_name' => $this->string(64)->null(),
            'hire_date' => $this->integer()->null(),
            'department_id' => $this->integer(10)->unsigned(),
            'is_management' => $this->boolean()->notNull()->defaultValue(0),
            'extension' => $this->smallInteger(3)->unsigned()->null(),
            'speed_dial' => $this->smallInteger(3)->unsigned()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'PRIMARY KEY(user_id)'
                ], $tableOptions);

        // create `full_name` index
        $this->createIndex(
                'idx_full_name', '{{%profile}}', 'last_name, first_name'
        );

        // create index for `department` table relation
        $this->createIndex(
                'idx_department', '{{%profile}}', [new Expression('is_management DESC'), new Expression('department_id ASC')]
        );

        // add foreign key for a table relation to the '{{%user}}' table
        $this->addForeignKey(
                'fk_profile_to_user', '{{%profile}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk_profile_to_user', '{{%profile}}');
        $this->dropTable('{{%profile}}');
    }

}
