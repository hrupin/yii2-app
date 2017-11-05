<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 18:43
 * @var $senders array
 */

$status = [
    'order' => Yii::t('redsms', 'Sender order'),
    'completed' => Yii::t('redsms', 'Sender completed')
];
?>
<h1><?= Yii::t('redsms', 'Header senders'); ?></h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th><?= Yii::t('redsms', 'Name sender'); ?></th>
        <th><?= Yii::t('redsms', 'Status sender'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($senders as $key => $item) {
        echo '<tr>';
        echo '<td>'.$key.'</td>';
        echo '<td>'.$status[$item].'</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>