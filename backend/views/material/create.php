<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Material */

$this->title = '新建素材';
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

