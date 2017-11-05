<?php

namespace modules\redsms\models\forms;

use Yii;

/**
 *
 * This is the model class for table "sms".
 *
 * @property integer $id
 * @property string $idSMS
 * @property string $status
 * @property string $sender
 * @property string $text
 * @property string $phone
 * @property integer $created_at
 * @property integer $updated_at
 */
class SmsForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'sender', 'text', 'phone'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['idSMS'], 'string', 'max' => 255],
            [['status', 'sender'], 'string', 'max' => 50],
            [['text'], 'string', 'max' => 500],
            [['phone'], 'string'],
            ['created_at', 'default', 'value' => time()],
            ['updated_at', 'default', 'value' => time()],
//            ['phone', 'match', 'pattern' => "/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", 'message' => Yii::t('redsms', 'Not correct phone') ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('redsms', 'ID'),
            'idSMS' => Yii::t('redsms', 'Id Sms'),
            'status' => Yii::t('redsms', 'Status'),
            'sender' => Yii::t('redsms', 'Sender'),
            'text' => Yii::t('redsms', 'Text'),
            'phone' => Yii::t('redsms', 'Phone'),
            'created_at' => Yii::t('redsms', 'Created At'),
            'updated_at' => Yii::t('redsms', 'Updated At'),
        ];
    }

}