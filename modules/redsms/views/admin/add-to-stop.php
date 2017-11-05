<?php

use yii\widgets\Pjax;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 02.09.17
 * Time: 0:34
 * @var $addToStop array
 */

?>
    <h1><?= Yii::t('redsms', 'Header add to stop'); ?></h1>
<?php Pjax::begin(); ?>

<?php
$res= '';
if(isset($addToStop['id'])){
    $res = Yii::t('redsms', 'The phone add to list in the black list');
}
elseif(isset($addToStop['error']) && $addToStop['error'] == 20){
    $res = Yii::t('redsms', 'The phone is already in the black list!');
}
?>

<h3><?= Yii::t('redsms', 'Phone in black list:'); ?> <?= $res; ?></h3>
<?= Html::beginForm(['/redsms/admin/add-to-stop'], 'post', ['data-pjax' => '', 'class' => 'form-inline']) ?>
<?= Html::input('text', 'phone'); ?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?= Html::endForm() ?>
<?php Pjax::end(); ?>