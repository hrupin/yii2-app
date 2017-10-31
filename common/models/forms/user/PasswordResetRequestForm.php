<?php

namespace common\models\forms;

use yii\base\Model;
use common\models\entities\user\User;
/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{

    public $email;
    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with this email address.'
            ],
        ];
    }

}