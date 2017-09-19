<?php

use yii\helpers\Html;
use backend\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaterialArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '素材文章列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-article-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <br><br>
    <p>
        <?= Html::a('添加文章', ['create', 'material_id' => $searchModel->material_id], ['class' => 'layui-btn layui-btn-danger']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'title',
            'keyword',
            [
                    'attribute' => 'material_id',
                    'value' => function($data){
                        return \common\models\Material::findOne($data->material_id)->title;
                    }
            ],
            [
                'attribute' => 'pic',
                'format' => 'html',
                'value' => function ($data){
                    return '<a href="'.$data->pic.'" target="_blank"><img src="'.$data->pic.'" style="width:100px;"></a>';
                }
            ],
             'addtime',
             [
                 'attribute' => 'status',
                 'value' => function($data){
                        return \common\models\MaterialArticle::getArticleStatus()[$data->status];
                 }
             ],

            ['class' => 'backend\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
