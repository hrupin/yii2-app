<?php

namespace common\models\interfaces;

/**
 * Interface ModuleInterface
 * @package common\models\interfaces
 */
interface ModuleInterface
{
    /**
     * Initializes the module.
     */
    public function init();
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app);
}