<?php

namespace hrupin\blog\filters;

use yii\web\NotFoundHttpException;
use yii\base\ActionFilter;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 16:59
 */

class BackendFilter extends ActionFilter
{

    public $controllers = [];

    public function beforeAction($action)
    {
        if (in_array($action->controller->id, $this->controllers)) {
            throw new NotFoundHttpException('Not found');
        }
        return true;
    }
}
