<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login w3layouts agileits">
    <h2>登 录</h2>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => '用户名'])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput(['placeholder' => '密码'])->label(false) ?>

    <?= $form->field($model, 'rememberMe', ['options' => ['style' => 'display:none;','placeholder' => '']])->checkbox()->label(false) ?>


    <ul class="tick w3layouts agileits">
        <li>
            <input type="checkbox" id="brand1" value="">
            <label for="brand1"><span></span>记住我</label>
        </li>
    </ul>
    <div class="send-button w3layouts agileits">
        <?= Html::submitButton('登 录', ['class' => 'send-button_submit', 'name' => 'login-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <div class="clear"></div>
</div>
