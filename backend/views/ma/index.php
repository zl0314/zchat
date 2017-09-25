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
        <?= Html::a('添加素材', ['create', 'type' => Yii::$app->request->get('type')], ['class' => 'layui-btn layui-btn-danger']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'title',
            'keyword',
            [
                'attribute' => 'pic',
                'format' => [
                    'html',
                ],
                'content' => function ($data){
                    if($data->type == 3 ){
                        $html = '<audio controls="controls" src="'.$data->pic.'"><source src="'.$data->pic.'"></audio>';
                        return $html;
                    }else{
                        return '<img src="'.$data->pic.'" style="width:100px;">';
                    }
                }
            ],
             'addtime',
             [
                 'attribute' => 'status',
                 'value' => function($data){
                        return \common\models\Ma::getArticleStatus()[$data->status];
                 }
             ],

            [
                'class' => 'backend\grid\ActionColumn',
                'template' => '{view-layer}{update}  {delete}'
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
