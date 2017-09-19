<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MaterialArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'title') ?>
    <?= $form->field($model, 'keyword') ?>
    <?php  echo $form->field($model, 'status')->dropDownList(\common\models\MaterialArticle::getArticleStatus()) ?>
    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'layui-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
