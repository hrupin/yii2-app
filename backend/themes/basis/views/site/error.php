<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Html;

$this->title = $name;

$pathTheme = $this->assetManager->getBundle(\backend\themes\basis\assets\BasisAsset::className())->baseUrl;
$this->registerJsFile($pathTheme . '/js/pages/index.js', ['depends' => '\backend\themes\basis\assets\BasisAsset']);

?>

<?= $this->render('/base/nav-bar-container'); ?>


<div class="content">
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dashboard
                    <small>Activity Summary</small>
                </h1>
            </div><!--.col-->
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="#" class="active"><i class="ion-home"></i> Homepage</a></li>
                </ol>
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.page-header-->

    <div class="display-animation">
        <div class="row image-row">

            <div class="col-sm-12 col-md-6">


                <div class="site-error">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode($message)) ?>
                    </div>

                    <p>
                        The above error occurred while the Web server was processing your request.
                    </p>
                    <p>
                        Please contact us if you think this is a server error. Thank you.
                    </p>

                </div>


            </div><!--.col-->

        </div><!--.row-->
    </div><!--.display-animation-->

    <div class="footer-links margin-top-40">
        <div class="row no-gutters bg-blue">
            <div class="col-xs-6"></div><!--.col-->
            <div class="col-xs-6">
                <a href="cards-image.html">
                    <span class="state">Cards</span>
                    <span>Image Cards</span>
                    <span class="icon"><i class="ion-android-arrow-forward"></i></span>
                </a>
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.footer-links-->

</div><!--.content-->

<div class="layer-container">

    <?= $this->render('/base/menu-layer'); ?>

    <?= $this->render('/base/search-layer'); ?>

    <?= $this->render('/base/user-layer'); ?>

</div><!--.layer-container-->