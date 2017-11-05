<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $provider yii\data\ActiveDataProvider */

echo GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'name', 'status',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{activate} {remove} {update}',
            'buttons' => [
                'activate' => function ($url,$model) {
                    if($model['status'] === 'not installed'){
                        return Html::a(
                            '<span class="glyphicon glyphicon-ok"></span>',
                            Url::toRoute(['/settings/install', 'module' => $model['name']]), ['title' => Yii::t('app', 'Install module')]);
                    }
                },
                'remove' => function ($url,$model) {
                    if($model['status'] === 'installed'){
                        return Html::a(
                            '<span class="glyphicon glyphicon-remove text-danger"></span>',
                            Url::toRoute(['/settings/remove', 'module' => $model['name']]), ['title' => Yii::t('app', 'Remove module')]);
                    }
                },
                'update' => function ($url,$model,$key) {
                    if($model['status'] === 'installed'){
                        return Html::a(
                            '<span class="glyphicon glyphicon-cog text-success"></span>',
                            Url::toRoute(['/settings/edit', 'module' => $model['name']]), ['title' => Yii::t('app', 'Settings module')]);
                    }
                }
            ],
        ],
    ],
]);