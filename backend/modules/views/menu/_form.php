<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\models\Menu;
/* @var $this yii\web\View */
/* @var $model backend\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'menu_controller')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'menu_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_parent')->dropDownList(Menu::getTopMenu()) ?>

    <?= $form->field($model, 'create_at')->textInput(['class' => ' form-control ', 'onclick' => 'WdatePicker({ dateFmt:\'yyyy-MM-dd HH:mm:ss\',readOnly:true})']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
