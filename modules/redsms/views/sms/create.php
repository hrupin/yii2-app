<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model hrupin\redsms\models\Sms */
/**
 * @var $sender array
 */

$this->title = Yii::t('redsms', 'Create Sms');
$this->params['breadcrumbs'][] = ['label' => Yii::t('redsms', 'Sms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'sender' => $sender
    ]) ?>

</div>
