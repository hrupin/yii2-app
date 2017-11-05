<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use backend\models\services\base\SettingsService;

/**
 * Settings controller
 */
class SettingsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionModules(){
        $modules = SettingsService::getAllModules();
        $provider = new ArrayDataProvider([
            'allModels' => $modules,
            'sort' => [
                'attributes' => ['name', 'status'],
            ],
            'pagination' => [
                'pageSize' => 12,
            ],
        ]);
        return $this->render('modules',[
            'provider' => $provider
        ]);
    }

    // TODO реализовать установку и удаление модулей, настройки модулей

}