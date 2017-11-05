<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\forms\auth\LoginForm;
use common\models\forms\auth\SignupForm;
use common\models\services\auth\UserService;

/**
 * User controller
 */
class AuthController extends Controller
{

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $form = new LoginForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            UserService::login($form);
            return $this->goBack();
        } else {
            return $this->render('login', [
                'form' => $form,
            ]);
        }
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $form = new SignupForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            if (UserService::signup($form) && UserService::firstSignin($form)) {
                // TODO Here it is necessary to implement a message about the successful registration and authorization by the alert. Also, depending on the project settings, enter the confirmation mail
                // TODO Here it is necessary to implement the phone verification via SMS
                return $this->goHome();
            }
            // TODO Here it is necessary to implement the error output of registration and authorization via alert
        }
        return $this->render('signup', [
            'form' => $form,
        ]);
    }


    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        Yii::$app->user->logout();

        return $this->goHome();
    }

}