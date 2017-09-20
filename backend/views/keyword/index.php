<?php
use backend\grid\GridView;
use backend\grid\ActionColumn;
?>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,

    'columns' => [
        'id',
        'keyword',
        [
            'attribute' => 'type',
            'value' => function($data){
                return \common\models\Material::getTypes()[$data->type];
            }
        ],
        [
            'class' => ActionColumn::class,
            'template' => '{update} {delete} {articles}',
        ],
    ],
]); ?>