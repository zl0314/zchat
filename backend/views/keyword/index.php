<?php

use yii\helpers\Html;
use backend\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\KeywordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keywords';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keyword-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <br><br>
    <p>
        <?= Html::a('添加关键字', ['create'], ['class' => 'layui-btn layui-btn-danger']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'keyword',
            [
                'attribute' => 'type',
                'value' => function($data){
                    return \common\models\Ma::getMaterialType()[$data->type];
                }
            ],
            [
                'attribute' => 'content',
                'format' => 'html',
                'label' => '回复标题',
                'value' => function ($data){
                    $sql = 'SELECT title FROM {{%'.$data->target_table . '}} WHERE id=:id';
                    $command = Yii::$app->db->createCommand($sql);
                    $command->bindValue(':id', $data->target_id, PDO::PARAM_INT);
                    $res     = $command->queryOne();
                    return '<a title="点击查看文章" target="_blank" href="'.Url::to(['/ma', 'type' => $data['type'], 'MaSearch[id]]' => $data->id]).'">'.$res['title'] . '</a>';
                }
            ],
            [
                'class' => 'backend\grid\ActionColumn',
                'template' => '{update}'
            ],
        ],
    ]); ?>

</div>