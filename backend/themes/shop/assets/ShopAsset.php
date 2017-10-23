<?php

namespace backend\themes\shop\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class ShopAsset extends AssetBundle
{
    public $sourcePath = '@backend/themes/shop/web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'backend\themes\basis\assets\BasisAsset',
    ];
}
