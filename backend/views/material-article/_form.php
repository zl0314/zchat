<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MaterialArticle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_id')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload') ?>

    <?= $form->field($model, 'intro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget('\common\widgets\ueditor\UEditor') ?>

    <?= $form->field($model, 'addtime')->textInput()->widget('common\widgets\LayuiDate') ?>

    <?php  echo $form->field($model, 'status')->dropDownList(\common\models\MaterialArticle::getArticleStatus()) ?>

    <?php
    echo $form->defaultButtons()
    ?>

    <?php ActiveForm::end(); ?>

</div>
