<?php
namespace modules\redsms\models\forms;

/**
 * Class SmsSearchForm
 * @package common\modules\redsms\models\forms
 * This is the model class SmsSearch.
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
class SmsSearchForm extends SmsForm
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['idSMS', 'status', 'sender', 'text', 'phone'], 'safe'],
        ];
    }
}