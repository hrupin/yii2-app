<?php

namespace common\models\entities\auth;

use Yii;
use common\models\forms\auth\LoginForm;
use common\models\entities\auth\User;

class Login extends LoginForm
{


    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public static function doLogin($username, $password)
    {
        $user = User::find()->findByUsernameOrEmail($username);
        if(!$user->validatePassword($password)){
            throw new \DomainException('Undefined user or password.');
        }
        if (!$user || !$user->isActive) {
            throw new \DomainException('Undefined user or password.');
        }
        return $user;
    }

}