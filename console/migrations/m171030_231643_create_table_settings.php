<?php

use yii\db\Migration;

/**
 * Class m171030_231643_create_table_settings
 */
class m171030_231643_create_table_settings extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%settings}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()->comment('Название настройки, модуля или параметра'),
            'type' => $this->smallInteger()->notNull()->comment('Тип настройки (Модуль, Компонент или Параметр)'),
            'acts' => $this->smallInteger()->notNull()->comment('В какой файл настроек его подключать(frontend, backend, api, console)'),
            'settings' => $this->text(2000)->notNull()->comment('Сериализованный массив настроек'),
            'updated_at' => $this->integer()->notNull()->comment('Дата последнего редактирования'),
            'created_at' => $this->integer()->notNull()->comment('Дата создания'),
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%settings}}');
    }
}
