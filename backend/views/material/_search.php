<?php

use yii\helpers\Html;
use backend\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>


<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
]); ?>
<?= $form->field($model, 'type')->dropDownList(\common\models\Material::getTypes())?>
<?= Html::submitButton('搜 索', ['class' => 'layui-btn']) ?>
<?php ActiveForm::end(); ?>
