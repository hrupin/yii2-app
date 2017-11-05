<?php

namespace modules\redsms;

use yii\base\Application;
use yii\base\Module as BaseModule;
use common\models\interfaces\ModuleInterface;

/**
 * Class Module
 * @package common\modules\redsms
 */
class Module extends BaseModule implements ModuleInterface
{
    /**
     * @var string the namespace that controller classes are in.
     */
    public $controllerNamespace = 'modules\redsms\controllers';

    /**
     * @var string login for RedSMS
     */
    public $login;

    /**
     * @var string API-key for RedSMS
     */
    public $apiKey;

    /**
     * Initializes the module.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *  @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
        ]);
    }
}
