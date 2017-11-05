<?php

namespace hrupin\blog\filters;

use yii\base\ActionFilter;
use yii\web\NotFoundHttpException;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 16:58
 */

class FrontendFilter extends ActionFilter
{

    public $controllers = ['admin'];

    public function beforeAction($action)
    {
        if (in_array($action->controller->id, $this->controllers)) {
            throw new NotFoundHttpException('Not found');
        }
        return true;
    }
}