<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model hrupin\redsms\models\Sms */

$this->title = Yii::t('redsms', 'Update {modelClass}: ', [
    'modelClass' => 'Sms',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('redsms', 'Sms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('redsms', 'Update');
?>
<div class="sms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
