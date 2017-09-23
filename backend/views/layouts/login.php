<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;
LoginAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>管理员登录</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- //Head -->
<!-- Body -->
<body>

<?php $this->beginBody() ?>
<h1>管理员登录</h1>
<div class="container w3layouts agileits">

<?=$content?>
<div class="clear"></div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>