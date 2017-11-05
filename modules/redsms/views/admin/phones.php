<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 19:39
 * @var $phones array
 */
$male = [
    '' => Yii::t('redsms', 'Male unknown'),
    'm' => Yii::t('redsms', 'Male male'),
    'f' => Yii::t('redsms', 'Female male')
];
?>

    <h1><?= Yii::t('redsms', 'Header phones'); ?></h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?= Yii::t('redsms', 'Number phones'); ?></th>
            <th><?= Yii::t('redsms', 'Full name phones'); ?></th>
            <th><?= Yii::t('redsms', 'Region phones'); ?></th>
            <th><?= Yii::t('redsms', 'Operator phones'); ?></th>
            <th><?= Yii::t('redsms', 'Birthday phones'); ?></th>
            <th><?= Yii::t('redsms', 'Male phones'); ?></th>
            <th><?= Yii::t('redsms', 'Send SMS phones'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($phones as $key => $item) {
            echo '<tr>';
            echo '<td>'.$key.'</td>';
            echo '<td>'.$item['name'].' '.$item['middle_name'].' '.$item['last_name'].'</td>';
            echo '<td>'.$item['region'].'</td>';
            echo '<td>'.$item['operator'].'</td>';
            echo '<td>'.$item['date_birth'].'</td>';
            echo '<td>'.$male[$item['male']].'</td>';
            echo '<td>';
            echo ' <a href="'.Url::toRoute(['/redsms/admin/send', 'phone' => $key]).'" class="btn btn-primary btn-ripple"><span class="ion-android-send"></span></a>';
            echo ' <a href="'.Url::toRoute(['/redsms/admin/add-to-stop', 'phone' => $key]).'" class="btn btn-danger btn-ripple"><span class="ion-ios-locked"></span></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
<?= LinkPager::widget(['pagination' => $pages]); ?>