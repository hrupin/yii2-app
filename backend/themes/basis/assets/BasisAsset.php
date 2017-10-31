<?php

namespace backend\themes\basis\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class BasisAsset extends AssetBundle
{
    public $sourcePath = '@backend/themes/basis/web';
    public $css = [
        'css/admin1.css',
        'css/elements.css',
        'plugins/rickshaw/rickshaw.min.css',
        'plugins/bxslider/jquery.bxslider.css',
        'css/plugins.css'
    ];

    public $js = [
        'js/global-vendors.js',
//        'http://maps.google.com/maps/api/js?sensor=true&amp;libraries=places',
//        'plugins/gmaps/gmaps.js',
//        'plugins/bxslider/jquery.bxslider.min.js',
//        'plugins/audiojs/audiojs/audio.min.js',
//        'plugins/d3/d3.min.js',
//        'plugins/rickshaw/rickshaw.min.js',
//        'plugins/jquery-knob/excanvas.js',
//        'plugins/jquery-knob/dist/jquery.knob.min.js',
//        'plugins/gauge/gauge.min.js',
        'js/pleasure.js',
        'js/layout.js',
//        'scripts/sliders.js',
//        'scripts/maps-google.js',
//        'scripts/widget-audio.js',
//        'scripts/charts-knob.js',
//        'scripts/index.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'backend\assets\AppAsset',
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        $view->registerJsFile($manager->getAssetUrl($this, 'plugins/modernizr/modernizr.min.js'), ['position'=>\yii\web\View::POS_HEAD]);
    }
}