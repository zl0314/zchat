<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Keyword */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keyword-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(\common\models\Ma::getMaterialType()) ?>

    <div style="display: none;">
        <?= $form->field($model, 'target_id')->hiddenInput()->label(false)?>
        <?= $form->field($model, 'target_table')->hiddenInput()->label(false)?>
    </div>


    <button class="layui-btn" style="margin-bottom:20px; margin-left:40px;">选择素材</button>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success layui-btn' : ' layui-btn btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script>

</script>