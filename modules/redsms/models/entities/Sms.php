<?php
namespace modules\redsms\models\entities;

use modules\redsms\models\forms\SmsForm;

class Sms extends SmsForm
{
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->updated_at = time();
            return true;
        }
        return false;
    }
}