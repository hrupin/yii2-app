<?php

namespace common\models\forms\auth;

use yii\base\Model;
use common\models\entities\auth\User;

/**
 * Login form
 */
class LoginForm extends Model
{

    public $username;
    public $password;
    public $rememberMe = true;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            ['username', 'validateUsername'],
            ['password', 'validatePassword']
        ];
    }

    public function validateUsername($attribute, $params){
        $user = User::find()->findByUsernameOrEmail($this->username);
        if (!$user) {
            $this->addError($attribute, 'Undefined user.');
        }
    }

    public function validatePassword($attribute, $params){
        if (!$this->hasErrors()) {
            $user = User::find()->findByUsernameOrEmail($this->username);
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect password.');
            }
        }
    }

}