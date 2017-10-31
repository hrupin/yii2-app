<?php

namespace common\bootstrap;

use Yii;
use yii\base\Component;
use yii\base\BootstrapInterface;
use common\models\entities\base\Settings;

/**
 * Class SetUp
 * @package common\bootstrap
 *
 * starting the main project settings
 * get settings from DB table Settings
 *
 */
class ProjectSettings extends Component implements BootstrapInterface
{

    public function bootstrap($app){

    }

}