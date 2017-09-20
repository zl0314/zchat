<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/9/19
 * Time: 18:08
 */

namespace backend\controllers;

use yii\data\ActiveDataProvider;
use backend\models\Keyword;

class KeywordController extends MainController
{

    public function actionIndex(){

        $dataProvider = new ActiveDataProvider([
            'query' => Keyword::find()
        ]);
        $this->renderData = [
            'dataProvider' => $dataProvider
        ];
        return  $this->display();
    }
}