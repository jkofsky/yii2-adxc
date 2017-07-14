<?php

use yii\db\Migration;

class m170714_153229_create_department extends Migration {

    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        if (Yii::$app->db->schema->getTableSchema('{{%department%}}', true) !== null) {
            $this->dropTable('{{%department%}}');
        }

        $this->createTable('{{%department%}}', [
            'id' => $this->primaryKey()->unsigned(),
            'dept_name' => $this->string()->unique()->notNull(),
                ], $tableOptions);

        // add foreign key for table `post`
        $this->addForeignKey(
                'fk_profile_to_Department', '{{%profile%}}', 'department_id', '{{%department%}}', 'id', 'SET NULL', 'CASCADE'
        );

        // add default departments
        $this->insert('{{%department%}}', ['dept_name' => 'Air Staff']);
        $this->insert('{{%department%}}', ['dept_name' => 'Board Ops']);
        $this->insert('{{%department%}}', ['dept_name' => 'Engineering']);
        $this->insert('{{%department%}}', ['dept_name' => 'News Staff']);
        $this->insert('{{%department%}}', ['dept_name' => 'Office Staff']);
        $this->insert('{{%department%}}', ['dept_name' => 'Promotions']);
        $this->insert('{{%department%}}', ['dept_name' => 'Sales Staff']);
    }

    public function safeDown() {
        $this->dropForeignKey('fk_profile_to_department', '{{%profile%}}');
        $this->dropTable('{{%department%}}');
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m170714_153229_create_department cannot be reverted.\n";

      return false;
      }
     */
}
