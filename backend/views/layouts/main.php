<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
AppAsset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理后台</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()?>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">管理后台</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?=Yii::$app->user->identity->username?>&nbsp; <a href="<?=Url::to('site/logout')?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="/admin/images/find_user.png" class="user-image img-responsive"/>
                </li>


                <li>
                    <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                </li>
                <li>
                    <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                </li>
                <li  >
                    <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                </li>
                <li  >
                    <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                </li>
                <li  >
                    <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                </li>
                <li  >
                    <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                </li>
                <li  >
                    <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li  >
                    <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <?=$content?>
        </div>
    </div>
</div>
<?php $this->endBody();?>

</body>

<?php $this->endPage();?>