<?php

use yii\helpers\Url;

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 18:15
 * @var $base array
 */

?>
<h1><?= Yii::t('redsms', 'Header base'); ?></h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th><?= Yii::t('redsms', 'ID base'); ?></th>
        <th><?= Yii::t('redsms', 'Name base'); ?></th>
        <th><?= Yii::t('redsms', 'Count base'); ?></th>
        <th><?= Yii::t('redsms', 'Pages base'); ?></th>
        <th><?= Yii::t('redsms', 'Congratulations happy birthday'); ?></th>
        <th><?= Yii::t('redsms', 'View base'); ?></th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach ($base as $key => $item) {
                echo '<tr>';
                echo '<td>'.$key.'</td>';
                echo '<td>'.$item['name'].'</td>';
                echo '<td>'.$item['count'].'</td>';
                echo '<td>'.$item['pages'].'</td>';
                echo ($item['birth_sender'])? '<td>'.$item['birth_sender'].'</td>': '<td>'.Yii::t('redsms','Not congratulations').'</td>' ;
                echo '<td><a href="'.Url::toRoute(['/redsms/admin/phones', 'id' => $key]).'" class="btn btn-primary btn-ripple"><span class="ion-eye"></span></a></td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>