<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model hrupin\redsms\models\Sms */
/* @var $form yii\widgets\ActiveForm */

$item = [];
foreach ($sender as $key => $value){
    $item[$key] = $key;
}
$params = [
        'prompt' => Yii::t('redsms', 'Select senders...')
];
?>

<div class="sms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'not_deliver'])->label(false); ?>

    <?= $form->field($model, 'sender')->dropDownList($item, $params); ?>

    <?= $form->field($model, 'text')->textarea(['row' => 3, 'maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('redsms', 'Create') : Yii::t('redsms', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
