<?php
/* @var $this yii\web\View */
/* @var $activeForm yii\bootstrap\ActiveForm */
/* @var $form common\models\forms\auth\SignupForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $activeForm = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $activeForm->field($form, 'username')->textInput(['autofocus' => true]) ?>

            <?= $activeForm->field($form, 'email') ?>

            <?= $activeForm->field($form, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
