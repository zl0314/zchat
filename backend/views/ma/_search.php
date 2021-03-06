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


    <?= $form->field($model, 'id') ?>
    <?= $form->field($model, 'title') ?>
    <?= $form->field($model, 'keyword') ?>
    <?php  echo $form->field($model, 'status')->dropDownList(\common\models\Ma::getArticleStatus()) ?>

    <?= $form->searchButton() ?>

    <?php ActiveForm::end(); ?>

</div>
