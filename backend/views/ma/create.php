<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MaterialArticle */

$this->title = 'Create Material Article';
$this->params['breadcrumbs'][] = ['label' => 'Material Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-article-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
