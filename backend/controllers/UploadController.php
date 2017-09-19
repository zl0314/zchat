<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/6/5
 * Time: 19:46
 */

namespace backend\controllers;

class UploadController extends \yii\web\Controller {
    public function actions() {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/uploads/{yyyy}/{mm}/{dd}/{time}{rand:6}",
                ]
            ],
            'upload_more'=>[
                'class' => 'common\widgets\batch_upload\UploadAction'
            ],
            'ueditor_upload' => [
                'class' => 'common\widgets\ueditor\UEditorAction'
            ],
        ];
    }

    public function actionIndex(){

    }
}
