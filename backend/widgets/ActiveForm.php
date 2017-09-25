<?php
/**
 * Author: lf
 * Blog: https://blog.feehi.com
 * Email: job@feehi.com
 * Created at: 2017-03-15 21:16
 */

namespace backend\widgets;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use backend\assets\ActiveFormAsset;

class ActiveForm extends \yii\widgets\ActiveForm
{

    public $options = [
        'class' => 'layui-form'
    ];

    public $fieldClass = 'backend\widgets\ActiveField';

    public function defaultButtons(array $options = [])
    {
        echo '<div class="layui-form-item">
              <div class="layui-input-block">
                    <button type="submit" class="layui-btn" lay-submit lay-filter="formDemo">' . Yii::t('app', 'Save') . '</button>
                    <button  type="reset" class="layui-btn layui-btn-primary">' . Yii::t('app', 'Reset') . '</button>
                </div>
            </div>';
    }

    public function searchButton()
    {
        echo '<div class="layui-form-item">
              <div class="layui-input-block">
                    <button type="submit" class="layui-btn" lay-submit lay-filter="formDemo">' . Yii::t('app', 'Search') . '</button>
                </div>
            </div>';
    }

    public function run()
    {
        if (! empty($this->_fields)) {
            throw new InvalidCallException('Each beginField() should have a matching endField() call.');
        }

        $content = ob_get_clean();
        echo Html::beginForm($this->action, $this->method, $this->options);
        echo $content;

        if ($this->enableClientScript) {
            $id = $this->options['id'];
            $options = Json::htmlEncode($this->getClientOptions());
            $attributes = Json::htmlEncode($this->attributes);
            $view = $this->getView();
            ActiveFormAsset::register($view);
            $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");

        }

        echo Html::endForm();
    }
}
