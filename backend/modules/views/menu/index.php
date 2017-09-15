<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '菜单管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建菜单', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute' => 'menu_name',
                    'value' => function($data){
                        if(!$data->menu_parent){
                            return $data->menu_name;
                        }else{
                            return '   |-- ' . $data->menu_name;
                        }
                    }
            ],
            'menu_controller',
            'menu_action',
            [
                'attribute' => 'menu_parent',
                'value' => function($data){
                    if(!$data->menu_parent){
                        return '无';
                    }else{
                        return \backend\modules\models\Menu::getParentMenuName($data->menu_parent)['menu_name'];
                    }
                }

            ],
            'create_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>