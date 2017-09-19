<?php
/**
 * Created by PhpStorm.
 * User: Aaron zhang
 * Date: 2017/9/19
 * Time: 15:41
 */
namespace common\widgets;
use yii\widgets\InputWidget;;
use yii\helpers\Html;


class LayuiDate extends InputWidget{
    //默认配置
    protected $_options;

    public function init()
    {
        if(isset($this->options['id'])){
            $this->id = $this->options['id'];
        }else{
            $this->id = $this->hasModel() ? Html::getInputId($this->model,
                $this->attribute) : $this->id;
        }
    }

    public function run(){
        $this->RegisterScript();
        if($this->hasModel()){
            return Html::activeTextInput($this->model, $this->attribute, ['id' => $this->id, 'class' => 'layui-input']);
        }else{
            return Html::textInput($this->id, $this->value,['id' => $this->id, 'class' => 'layui-input']);
        }
    }

    //添加渲染日历JS
    public function RegisterScript(){
        $jsStr = '
            layui.use(\'laydate\', function(){
              var laydate = layui.laydate;
              
              //执行一个laydate实例
              laydate.render({
                elem: \'#'.$this->id.'\', //指定元素
                format: \'yyyy-MM-dd HH:mm:ss\'
              });
            });
            ';
        $this->view->registerJs($jsStr);
    }

}