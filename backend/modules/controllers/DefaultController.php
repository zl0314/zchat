<?php

namespace backend\modules\controllers;

use backend\controllers\MainController;


class DefaultController extends MainController{

    public function actionIndex() {
        return $this->display();
    }
}
