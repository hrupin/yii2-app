<?php

use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\jui\DatePicker;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 02.09.17
 * Time: 0:34
 * @var $statByMonth array
 */

?>
    <h1><?= Yii::t('redsms', 'Header statistics by month'); ?></h1>
<?php Pjax::begin(); ?>
<?= Html::beginForm(['/redsms/admin/stat-by-month'], 'post', ['data-pjax' => '', 'class' => 'form-inline']) ?>
<?= DatePicker::widget(['name' => 'month', 'language' => 'ru', 'dateFormat' => 'yyyy/MM']);
?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?= Html::endForm() ?>
    <hr>
<?php
$res = '';
if (isset($statByMonth['error']) && $statByMonth['error'] == 19) {
    $res = Yii::t('redsms', 'Statistics for this month no');
    echo '<h3>'.$res.'</h3>';
}
else {
    echo '<h3>' . Yii::t('redsms', 'The statistics for this month') . '</h3>';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>'.Yii::t('redsms', 'Date statistics').'</th>';
    echo '<th>'.Yii::t('redsms', 'Count deliver statistics').'</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($statByMonth as $item){
        foreach ($item as $key => $child) {
            echo '<tr>';
            echo '<td>'.$key.'</td>';
            echo '<td>'.$child[0]['deliver'][0]['parts'].'</td>';
            echo '</tr>';
        }
    }
    echo '</tbody>';
    echo '</table>';
}
?>
<?php Pjax::end(); ?>