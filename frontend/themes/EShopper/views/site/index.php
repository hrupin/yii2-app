<?php

/* @var $this \yii\web\View */

use frontend\themes\EShopper\assets\EShopperAsset;

$pathTheme = $this->assetManager->getBundle(EShopperAsset::className())->baseUrl;

?>
<?= $this->render('/base/header'); ?>
<?= $this->render('/base/slider'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?= $this->render('/base/left-sidebar'); ?>
            </div>
            <div class="col-sm-9 padding-right">
                <?= $this->render('/modules/features-items'); ?>
                <?= $this->render('/modules/category-tab'); ?>
                <?= $this->render('/modules/features-items'); ?>
                <?= $this->render('/modules/recommended_items'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->render('/base/footer'); ?>