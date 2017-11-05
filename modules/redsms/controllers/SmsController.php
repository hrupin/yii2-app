<?php

namespace hrupin\redsms\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\modules\redsms\models\entities\Sms;

/**
 * SmsController implements the CRUD actions for Sms model.
 */
class SmsController extends Controller
{

    /**
     * Finds the Sms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sms::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
