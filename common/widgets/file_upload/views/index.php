<?php
/**
 * @see Yii中文网  http://www.yii-china.com
 * @author Xianan Huang <Xianan_huang@163.com>
 * 图片上传组件
 * 如何配置请到官网（Yii中文网）查看相关文章
 */
 
use yii\helpers\Html;
?>

<?php
$allow = $config[$uploadType . 'AllowFiles'];
?>
<script>
    window.allow_file_types = <?=json_encode(array_map(function($a){
        return ltrim($a, '.');
    },$allow))?>;
    window.file_type = '<?=$uploadType?>';
    window.input_name = '<?=$config[$uploadType . 'FieldName']?>';
</script>

<div class="per_upload_con" data-url="<?=$config['serverUrl']?>" data-filetype="<?=$uploadType?>" data-maxsize="<?=$config[$uploadType . 'MaxSize']?>">
    <div class="per_real_img <?=$attribute?>" domain-url = "<?=$config['domain_url']?>">
        <?php if($uploadType != 'voice'):?>
            <?=isset($inputValue)?'<img src="'.$config['domain_url'].$inputValue.'">':''?>
        <?php else:?>
            <audio controls="controls"  style="padding-top:15px;">
            <source src="<?=$inputValue?>" />
            Your browser does not support the audio element
            </audio>
        <?php endif;?>
    </div>
    <div class="per_upload_img" <?php if($uploadType == 'voice'):?> style="margin-top:15px;height:32px;background:none" <?php endif;?> ></div>

    <div class="per_upload_text">
        <p class="upbtn" ><a id="<?=$attribute?>" href="javascript:;" class="btn btn-success green choose_btn layui-btn">选择素材</a></p>

        <p class="rule">仅支持文件格式为<?=implode('、', $allow)?><br>大小在<?=$config[$uploadType . 'MaxSize']/1024/1024?>M以下的文件

        </p>

    </div>
    <input up-id="<?=$attribute?>" type="hidden" name="<?=$inputName?>" upname='<?=$config['fileName']?>' value="<?=isset($inputValue)?$inputValue:''?>" />
</div>