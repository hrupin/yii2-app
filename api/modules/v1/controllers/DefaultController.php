<?php
namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends ActiveController
{
    public $modelClass = 'dektrium\user\models\User';

    protected function verbs()
    {
        return [
            'index' => ['POST', 'GET', 'HEAD']
        ];
    }

    public function actions()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: X-Requested-With, Token-User');
        $actions = parent::actions();
        return $actions;
    }
}