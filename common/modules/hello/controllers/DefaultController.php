<?php
namespace common\modules\hello\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionTest(){
        return $this->render('test');
    }

}