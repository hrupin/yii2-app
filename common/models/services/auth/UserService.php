<?php
namespace common\models\services\auth;

use common\models\forms\auth\LoginForm;
use Yii;
use common\models\entities\auth\Login;
use common\models\entities\auth\Signup;
use common\models\forms\auth\SignupForm;
use \common\models\entities\auth\User as EntitiesUser;

class UserService extends EntitiesUser
{

    public static function signup(SignupForm $form)
    {
        $user = Signup::doSignup(
            $form->username,
            $form->email,
            $form->password
        );
        $transaction = Yii::$app->db->beginTransaction();
        if ($user->save()) {
            $transaction->commit();
            return true;
        } else {
            $transaction->rollback();
            return false;
        }
    }

    public static function login(LoginForm $form){
        $user = Login::doLogin(
            $form->username,
            $form->password
        );
        if($user){
            return Yii::$app->user->login($user, $form->rememberMe ? 3600 * 24 * 30 : 0);
        }
        return false;
    }

    public static function firstSignin(SignupForm $form){
        $user = Login::doLogin(
            $form->username,
            $form->password
        );
        if($user){
            return Yii::$app->user->login($user, 3600 * 24 * 30);
        }
        return false;
    }

}