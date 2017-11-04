<?php
namespace common\models\services\auth;

use Yii;
use common\models\entities\auth\Login;
use common\models\entities\auth\Signup;
use common\models\forms\auth\SignupForm;
use \common\models\entities\auth\User as EntitiesUser;

class User extends EntitiesUser
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

    public static function loginAfterSignup(SignupForm $form){
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