<?php

use yii\helpers\Html;
use backend\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '菜单管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">

    <p>
        <?= Html::a('创建菜单', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                    'attribute' => 'menu_name',
                    'format' => 'html',
                    'value' => function($data){
                        if(!$data->menu_parent){
                            return $data->menu_name;
                        }else{
                            return '   &nbsp;&nbsp;&nbsp;&nbsp;|-- ' . $data->menu_name;
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
