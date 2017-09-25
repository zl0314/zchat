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
    <span class="help-inline">多个关键字可以用“,”(英文状态)隔开</span>
    <?= $form->field($model, 'type')->hiddenInput()->label(false)?>

    <?php if(Yii::$app->request->get('type') != 4):?>
        <?= $form->field($model, 'pic')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload',[
                'options' => [
                    'uploadType' => Yii::$app->request->get('type') == 3 ? 'voice' : ''
                ]
        ]) ?>
        <?= $form->field($model, 'intro')->textarea(['maxlength' => true]) ?>
    <?php endif;?>

    <?php if(Yii::$app->request->get('type') == 1):?>
        <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget('\common\widgets\ueditor\UEditor') ?>
    <?php elseif(Yii::$app->request->get('type') == 4):?>
        <?= $form->field($model, 'content')->textarea(['rows' => 6])?>
    <?php endif;?>

    <?= $form->field($model, 'addtime')->textInput()->widget('common\widgets\LayuiDate') ?>

    <?php  echo $form->field($model, 'status')->dropDownList(\common\models\Ma::getArticleStatus()) ?>

    <?php
    echo $form->defaultButtons()
    ?>

    <?php ActiveForm::end(); ?>

</div>
