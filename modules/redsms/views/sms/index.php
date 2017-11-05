<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel hrupin\redsms\models\SmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $sender array */

$this->title = Yii::t('redsms', 'Sms');
$this->params['breadcrumbs'][] = $this->title;

$senders = [];
foreach ($sender as $key => $value){
    $senders[$key] = $key;
}

$status = [
    'not_deliver' => Yii::t('redsms', 'In Process'),
    'deliver' => Yii::t('redsms', 'Success')
];

?>
<div class="sms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('redsms', 'Create Sms'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'status',
                'filter'=> $status,
            ],
            [
                'attribute'=>'sender',
                'filter'=> $senders,
            ],
             'phone',
             'created_at:date',
             'updated_at:date',
            [
                'content' => function($data){
                    return '<a href="'.Url::toRoute(['/redsms/admin/status', 'id' => $data->idSMS]).'"><i class="fa fa-refresh" aria-hidden="true"></i></a>';
                }
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
