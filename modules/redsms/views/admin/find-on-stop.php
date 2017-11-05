<?php

use yii\widgets\Pjax;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 02.09.17
 * Time: 0:34
 * @var $findOnStop array
 */

?>
<h1><?= Yii::t('redsms', 'Header find on stop'); ?></h1>
<?php Pjax::begin(); ?>

<?php
$res= '';
if(isset($findOnStop['error']) && $findOnStop['error'] =19){
    $res = Yii::t('redsms', 'The phone is not listed in the black list');
}
elseif($findOnStop && is_array($findOnStop)){
    foreach ($findOnStop as $item) {
        $res = Yii::t('redsms', 'Phone {date} in the black list!', ['date' => $item['time_in']]);

    }
}
?>

<h3><?= Yii::t('redsms', 'Find phone on stop:'); ?> <?= $res; ?></h3>
<?= Html::beginForm(['/redsms/admin/find-on-stop'], 'post', ['data-pjax' => '', 'class' => 'form-inline']) ?>
<?= Html::input('text', 'phone'); ?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?= Html::endForm() ?>
<?php Pjax::end(); ?>

