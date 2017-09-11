<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    <div class="row">
        <div class="col-md-12">
            <h2>欢迎回来，<?=Yii::$app->user->identity->username?></h2>
            <h5>最后登录时间： <?=Yii::$app->user->identity->last_login_time?></h5>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box">
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box">
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box">
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box">
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
            </div>
        </div>
        
    </div>


        <div class=" col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table Example
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>User No.</th>
                                <th>User No.</th>
                                <th>User No.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>100090</td>
                                <td>100090</td>
                                <td>100090</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /. ROW  -->
