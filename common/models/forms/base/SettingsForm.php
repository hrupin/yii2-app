<?php

namespace common\models\forms\base;

use Yii;
use common\models\repositories\base\SettingsQuery;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $name
 * @property int $type
 * @property int $acts
 * @property string $settings
 * @property int $default
 * @property int $updated_at
 * @property int $created_at
 */
class SettingsForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'acts', 'settings', 'updated_at', 'created_at'], 'required'],
            [['type', 'acts', 'default', 'updated_at', 'created_at'], 'integer'],
            [['settings'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'acts' => Yii::t('app', 'Acts'),
            'settings' => Yii::t('app', 'Settings'),
            'default' => Yii::t('app', 'Default'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @inheritdoc
     * @return SettingsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SettingsQuery(get_called_class());
    }
}