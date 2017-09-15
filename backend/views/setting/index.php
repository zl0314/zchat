<?php
/* @var $this yii\web\View */
$this->title = '系统设置';
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>

<?php if (Yii::$app->session->hasFlash('saving_fail')): ?>
    <div class="alert alert-success">
        保存失败
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['action' => Url::to('/admin/setting/create'), 'options' => ['enctype' => 'multipart/form-data']]) ?>
<fieldset>
    <legend>全局信息设置</legend>

    <?=$form->field($model, 'id')->hiddenInput()->label(false)?>
    <?php foreach($model->attributeLabels() as $k => $r):?>
        <?php if($k == 'footinfo'):?>
            <?=$form->field($model, $k)->textarea()?>
        <?php else:?>
            <?=$form->field($model, $k)->textInput()?>
        <?php endif;?>
    <?php endforeach;?>
</fieldset>


<br>
<input type="submit" value="提 交" class="btn btn-primary">
<br>
<?php ActiveForm::end() ?>
