<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Keyword */

$this->title = 'Update Keyword: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Keywords', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keyword-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
