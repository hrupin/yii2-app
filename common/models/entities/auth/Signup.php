<?php

namespace common\models\entities\auth;

use Yii;
use common\models\forms\auth\UserForm;

class Signup
{

    /**
     * @param $username
     * @param $email
     * @param $password
     * @return User
     */
    public static function doSignup($username, $email, $password)
    {
        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->setPassword(!empty($password) ? $password : Yii::$app->security->generateRandomString());
        $user->created_at = time();
        $user->updated_at = time();
        $user->status = UserForm::STATUS_ACTIVE;
        $user->auth_key = Yii::$app->security->generateRandomString();
        return $user;
    }
}