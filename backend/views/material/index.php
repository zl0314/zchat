<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '素材管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加素材', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'title',
            [
                'attribute' => 'type',
                'value' => function($data){
                    return \common\models\Material::getTypes()[$data->type];
                }
            ],
            'pic',
            'intro',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'articles' => function ($url, $model, $key) {
                        return Html::a('<i class="fa  fa-commenting-o" aria-hidden="true"></i>文章列表 ' , Url::to([
                            'marc/index',
                            'MarcSearch[material_id]' => $model->id
                        ]), [
                            'title' => '文章列表',
                            'class' => '',
                        ]);
                    }
                ],
                'template' => '{view} {update} {delete} {articles}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
