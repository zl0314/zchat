<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MaterialArticle */

$this->title = 'Update Material Article: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Material Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-article-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
