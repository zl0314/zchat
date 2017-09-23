<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
    <?= $form->field($model, 'material_id')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'keyword') ?>
    <?php  echo $form->field($model, 'status')->dropDownList(\common\models\MaterialArticle::getArticleStatus()) ?>
    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
