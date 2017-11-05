<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 17:56
 *
 * @var $balance array
 *
 */
?>
<h1><?= Yii::t('redsms', 'Header balance'); ?></h1>
<?= Yii::t('redsms', 'Balance: {money} {currency}', ['money' => $balance['money'], 'currency' => $balance['currency']]); ?>