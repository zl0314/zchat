<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\KeywordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keyword-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>


    <?= $form->field($model, 'keyword') ?>

    <?= $form->field($model, 'type')->dropDownList(\common\models\Ma::getMaterialType()) ?>

    <?= $form->defaultButtons() ?>

    <?php ActiveForm::end(); ?>

</div>
