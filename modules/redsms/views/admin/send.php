<?php

/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 01.09.17
 * Time: 22:33
 * @var $this yii\web\View
 * @var $sms hrupin\redsms\models\Sms
 * @var $sender hrupin\redsms\models\Redsms
 */
?>

<?= $this->render('/sms/_form', [
    'model' => $sms,
    'sender' => $sender
]); ?>
