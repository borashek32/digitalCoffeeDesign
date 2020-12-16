<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'headerOptions'=>['class' => 'text-left', 'style' => 'width: 70px;'],
                'contentOptions'=>['class' => 'text-left'],
            ],
            'name',
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions'=>['class' => 'text-center', 'style' => 'width: 100px;'],
                'contentOptions'=>['class' => 'text-center'],
                'header' => Yii::t('app','Actions'),
                'template' => '{update}{delete}',
                'buttons' => [
                    'update' => function ($url, $model){
                        return Html::a('<i class="fa fa-edit"></i>', $url, [
                            'class' => 'btn btn-primary btn-xs',
                            'style' => 'margin-right: 10px',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => Yii::t('app', 'Edit'),
                            'data-pjax' => '0'
                        ]);
                    },
                    'delete' => function ($url, $model){
                        return Html::a('<i class="far fa-trash-alt"></i>', $url, [
                            'class' => 'btn btn-danger btn-xs',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => Yii::t('app', 'Delete'),
                            'data-confirm' => Yii::t('app', 'Are you sure, you want to delete this record?'),
                            'data-pjax' => '1',
                            'data-method' => 'post'
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
