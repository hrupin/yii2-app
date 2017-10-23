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
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
