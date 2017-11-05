<?php

namespace common\modules\redsms\controllers;

use Yii;
use DateTime;
use yii\base\Model;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\HttpException;
use yii\filters\VerbFilter;
use hrupin\redsms\models\Sms;
use yii\filters\AccessControl;
use hrupin\redsms\models\Redsms;
use hrupin\redsms\models\ErrorRedsms;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 16:56
 */

class AdminController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionBalance(){
        $model = Yii::createObject(Redsms::className());
        return $this->render('balance', [
            'balance' => $model->balance()
        ]);
    }

    public function actionBase(){
        $model = Yii::createObject(Redsms::className());
        return $this->render('base', [
            'base' => $model->base()
        ]);
    }

    public function actionSenders(){
        $model = Yii::createObject(Redsms::className());
        return $this->render('senders', [
            'senders' => $model->senders()
        ]);
    }

    public function actionPhones($id, $page = 0){
        $model = Yii::createObject(Redsms::className());
        $base = $model->base();
        $pages = new Pagination(['totalCount' => $base[$id]['count'], 'pageSize' => 100]);
        $pages->pageSizeParam = false;
        return $this->render('phones', [
            'phones' => $model->phones($id, $page),
            'pages' => $pages,
        ]);
    }

    public function actionSend($phone = false){
        $model = Yii::createObject(Redsms::className());
        $sms = Yii::createObject(Sms::className());
        if($phone){
            $sms->phone = $phone;
        }
        $sender = $model->senders();
        if(Yii::$app->request->isPost){
            if($sms->load(Yii::$app->request->post()) && $sms->validate()){
                $answer = $model->sendSms(
                    $sms->phone,
                    $sms->text,
                    $sms->sender
                );
                foreach ($answer as $item) {
                    foreach ($item as $key => $child) {
                        if(isset($child['error']) && $child['error'] == 'phone_code_user'){
                            $message = ErrorRedsms::handle(ErrorRedsms::STATUS_NO_MONEY);
                            throw new HttpException(405, $message);
                        }
                        if(isset($child['error']) && !$child['error']){
                            $tmp = new Sms();
                            $tmp->load(Yii::$app->request->post());
                            $tmp->phone = (string)$key;
                            $tmp->idSMS = $child['id_sms'];
                            $tmp->status = 'not_deliver';
                            $tmp->save();
                            var_dump($tmp->getErrors());
                            unset($tmp);
                        }
                    }
                }
                return $this->redirect('/redsms/sms/index');
            }
        }
        return $this->render('send', [
            'sms' => $sms,
            'sender' => $sender
        ]);
    }

    public function actionFindOnStop(){
        $model = Yii::createObject(Redsms::className());
        $findOnStop = false;
        if(Yii::$app->request->isAjax){
            $findOnStop = $model->findOnStop(Yii::$app->request->post('phone'));
        }
        return $this->render('find-on-stop', [
            'findOnStop' => $findOnStop
        ]);
    }

    public function actionAddToStop($phone = false){
        $model = Yii::createObject(Redsms::className());
        $addToStop = false;
        if($phone){
            $addToStop = $model->addToStop($phone);
        }
        if(Yii::$app->request->isAjax){
            $addToStop = $model->addToStop(Yii::$app->request->post('phone'));
        }
        return $this->render('add-to-stop', [
            'addToStop' => $addToStop
        ]);
    }
    public function actionStatByMonth(){
        $model = Yii::createObject(Redsms::className());
        $statByMonth = [];
        if(Yii::$app->request->isAjax){
            $month = Yii::$app->request->post('month');
            $date = DateTime::createFromFormat('Y/m', $month);
            $statByMonth = $model->statByMonth($date->format('Y-m'));
        }
        return $this->render('stat-by-month', [
            'statByMonth' => $statByMonth
        ]);
    }

    public function actionStatus($id){
        $model = Yii::createObject(Redsms::className());
        $sms = Sms::find()->where(['idSMS' => $id])->limit(1)->one();
        $status = $model->getStatus($id);
        if(isset($status['error']) && $status['error'] == 18){
            return $this->redirect('/redsms/sms/index');
        }
        $sms->status = $status[$id]['status'];
        $sms->update();
        return $this->redirect('/redsms/sms/index');
    }

}
