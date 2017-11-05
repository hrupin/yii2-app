<?php

use yii\db\Migration;

class m170901_191810_create_table_sms extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%sms}}', [
            'id' => $this->primaryKey(),
            'idSMS' => $this->string(255)->notNull(),
            'status' => $this->string(50)->notNull(),
            'sender' => $this->string(50)->notNull(),
            'text' => $this->string(500)->notNull(),
            'phone' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sms}}');
    }

}
