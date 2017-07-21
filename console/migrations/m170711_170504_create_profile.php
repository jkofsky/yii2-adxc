<?php

use yii\db\Migration;
use yii\db\Expression;

class m170711_170504_create_profile extends Migration {

    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
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

        $this->createIndex(
                'idx_full_name', '{{%profile%}}', 'last_name, first_name'
        );

        $this->createIndex(
                'idx_department', '{{%profile%}}', [new Expression('is_management DESC'), new Expression('department_id ASC')]
        );

        // add foreign key for table `post`
        $this->addForeignKey(
                'fk_profile_to_user', '{{%profile%}}', 'user_id', '{{%user%}}', 'id', 'CASCADE', 'CASCADE'
        );
    }

    public function safeDown() {
        $this->dropForeignKey('fk_profile_to_user', '{{%profile%}}');
        $this->dropTable('{{%profile%}}');
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m170711_170504_create_profile cannot be reverted.\n";

      return false;
      }
     */
}
