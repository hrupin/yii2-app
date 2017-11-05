<?php
/* @var $this yii\web\View */
/* @var $activeForm yii\bootstrap\ActiveForm */
/* @var $form common\models\forms\auth\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $activeForm = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $activeForm->field($form, 'username')->textInput(['autofocus' => true]) ?>
            <?= $activeForm->field($form, 'password')->passwordInput() ?>
            <?= $activeForm->field($form, 'rememberMe')->checkbox() ?>
            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
