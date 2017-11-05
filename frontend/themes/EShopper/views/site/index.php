<?php

/* @var $this \yii\web\View */

// TODO временный блок, надо удалить
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
///

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

                <?php
                NavBar::begin([
                    'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Signup', 'url' => ['/auth/signup']];
                    $menuItems[] = ['label' => 'Login', 'url' => ['/auth/login']];
                } else {
                    $menuItems[] = '<li>'
                        . Html::beginForm(['/auth/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();
                ?>

                <?= $this->render('/modules/features-items'); ?>
                <?= $this->render('/modules/category-tab'); ?>
                <?= $this->render('/modules/features-items'); ?>
                <?= $this->render('/modules/recommended_items'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->render('/base/footer'); ?>