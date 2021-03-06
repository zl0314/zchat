<?php
namespace common\controllers;
use yii\web\Controller;
use Yii;
/**
 * Created by PhpStorm.
 * User: zlong
 * Date: 2017/9/23
 * Time: 16:20
 */
class FrontController extends Controller{
    //模板数据
    public $renderData = [];
    //系统设置
    public $sys_setting;

    public function init() {
        parent::init(); // TODO: Change the autogenerated stub
        $this->sys_setting = Yii::$app->cache->get('system_setting');
    }

    //调用模板，加载layout
    public function display($view = ''){
        $view = $view ? $view : '/' . $this->id . '/'. $this->action->id;
        return $this->render($view, $this->renderData);
    }

    //调用模板， 不加载layout
    public function displayPartial($view = ''){
        $view = $view ? $view : '/' . $this->id . '/'. $this->action->id;
        return $this->renderPartial($view, $this->renderData);
    }



}