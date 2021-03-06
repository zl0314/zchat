<?php
/**
 * @see Yii中文网  http://www.yii-china.com
 * @author Xianan Huang <Xianan_huang@163.com>
 * 图片上传组件
 * 如何配置请到官网（Yii中文网）查看相关文章
 */
namespace common\widgets\file_upload;

use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\web\View;
use common\widgets\file_upload\assets\FileUploadAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class FileUpload extends InputWidget
{
    public $config = [];

    public $value = '';

    public $uploadType = 'image';

    public function init()
    {
        parent::init();
        $this->config = require(__DIR__ . '/config.php');

        $uploadType = !empty($this->options) && !empty($this->options['uploadType']) ? $this->options['uploadType'] : 'image';
        $this->uploadType = $uploadType;

        $_config = [
            'serverUrl' => Url::to(['/upload/upload','action'=>'upload' . $uploadType]),  //上传服务器地址
            'fileName' => 'upfile',                                      //提交的图片表单名称
            'domain_url' => '',                                          //图片域名 不填为当前域名
        ];
        $this->config = ArrayHelper::merge($_config, $this->config);
    }

    public function run()
    {
        $this->registerClientScript();
        if ($this->hasModel()) {
            $inputName = Html::getInputName($this->model, $this->attribute);
            $inputValue = Html::getAttributeValue($this->model, $this->attribute);

            return $this->render('index',[
                'uploadType' => $this->uploadType,
                'config'=>$this->config,
                'inputName' => $inputName,
                'inputValue' => $inputValue,
                'attribute' => $this->attribute,
            ]);
        } else {
            return $this->render('index',[
                'uploadType' => $this->uploadType,
                'config'=>$this->config,
                'inputName' => 'file-upload',
                'inputValue'=> $this->value
            ]);
        }
    }

    public function registerClientScript()
    {
        FileUploadAsset::register($this->view);
    }
}