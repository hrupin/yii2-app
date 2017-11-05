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
        if (!$user) {
            throw new \DomainException('Undefined user or password.');
        }
        // TODO Here it is necessary to connect the setting of confirmation of mail and phone
        if(!$user->isActive){
            throw new \DomainException('Your account is not activated.');
        }
        if(!$user->validatePassword($password)){
            throw new \DomainException('Incorrect password.');
        }
        return $user;
    }

}