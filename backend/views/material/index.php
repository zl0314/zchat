<?php

use yii\helpers\Html;
use backend\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use backend\grid\ActionColumn;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '素材管理';
$this->params['breadcrumbs'][] = $this->title;
?>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<br><br>
<p>
        <?= Html::a('添加素材', ['create'], ['class' => 'layui-btn layui-btn-danger']) ?>
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
                'class' => ActionColumn::class,
                'buttons' => [
                    'articles' => function ($url, $model, $key) {
                        return Html::a('<i class="fa  fa-commenting-o" aria-hidden="true"></i>文章列表 ' , Url::to([
                            'material-article/index',
                            'material_id' => $model->id
                        ]), [
                            'title' => '文章列表',
                            'class' => 'layui-btn layui-btn-small',
                        ]);
                    }
                ],
                'template' => '{view-layer} {update} {delete} {articles}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?>

