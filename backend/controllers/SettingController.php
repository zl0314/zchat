<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 2017/6/5
 * Time: 19:46
 */

namespace backend\controllers;
use common\models\Setting;
use yii\filters\VerbFilter;
use backend\models\SettingForm;
use yii\helpers\Url;
use Yii;

class SettingController extends \yii\web\Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'create' => ['post'],
                ],

            ]
        ];
    }

    public function actionIndex() {
        $model = New SettingForm();
        $setting = Setting::getSetting();
        $model->id = $setting['id'];

        //循环赋予值
        foreach($setting as $k => $r){
            $model->$k = $r;
        }

        $vars = [
            'model' => $model
        ];

        return $this->render('index', $vars);
    }

    //保存设置
    public function actionCreate() {
        $model = New SettingForm();
        if($model->validate()){
            //转换成Json格式
            $data = Yii::$app->request->post('SettingForm');
            $id = $data['id'];
            unset($data['id']);

            $json_data = serialize($data);

            //保存上传的二维码

            //获取DB连接
            $connection  = Yii::$app->db;
            $setting = Setting::findOne($id);
            if(!empty($setting->id)){
                $sql = "UPDATE {{%setting}} SET setting ='$json_data'";
                $command = $connection->createCommand($sql);
                $res     = $command->query($sql);
            }else{
                $sql = "INSERT INTO {{%setting}}(setting) values('$json_data')";
                $command = $connection->createCommand($sql);
                $res     = $command->query($sql);
            }
            if($res){
                $this->redirect(Url::to('/admin/setting'));
            }
        }else{
            Yii::$app->session->setFlash('saving_fail');
            $this->redirect(Url::to('/admin/setting'));
        }
    }

}
