<?php

namespace frontend\themes\EShopper\assets;

use yii\web\AssetBundle;

/**
 * EShopper frontend application asset bundle.
 */
class EShopperAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/EShopper/web';

    public $css = [
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/animate.css',
        'css/main.css',
        'css/responsive.css'
    ];

    public $js = [
        'js/jquery.scrollUp.min.js',
        'js/price-range.js',
        'js/jquery.prettyPhoto.js',
        'js/main.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'frontend\assets\AppAsset'
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        $view->registerJsFile($manager->getAssetUrl($this, 'js/html5shiv.min.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
        $view->registerJsFile($manager->getAssetUrl($this, 'js/respond.min.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
    }
}