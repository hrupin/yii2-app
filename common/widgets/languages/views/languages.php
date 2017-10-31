<?php

/* @var $this yii\web\View */
/* @var $current \common\models\entities\base\Languages */
/* @var $langs array languages */

use yii\bootstrap\Dropdown;

?>

<div class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?= $current->name;?> <b class="caret"></b></a>
    <?php
    echo Dropdown::widget([
        'items' => $langs,
    ]);
    ?>
</div>