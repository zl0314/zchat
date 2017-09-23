<div style="padding:20px">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>标题</legend>
        <div class="layui-field-box"><?=($model->title)?></div>
    </fieldset>

    <fieldset class="layui-elem-field layui-field-title">
        <legend>文章状态</legend>
        <div class="layui-field-box"><?=(\common\models\Ma::getArticleStatus()[$model->status])?></div>
    </fieldset>

    <?php if($model->type != 3):?>
    <fieldset class="layui-elem-field layui-field-title">
        <legend>封面图</legend>
        <div class="layui-field-box"><img src="<?=($model->pic)?>" style="width:180px" alt="" class="src"></div>
    </fieldset>
    <?php else:?>
        <fieldset class="layui-elem-field layui-field-title">
            <legend>语音素材</legend>
            <div class="layui-field-box">
                <audio src="<?=$model->pic?>" controls="controls">
                    <source src="<?=$model->pic?>">
                </audio>
            </div>
        </fieldset>
    <?php endif;?>

    <fieldset class="layui-elem-field layui-field-title">
        <legend>发布时间</legend>
        <div class="layui-field-box"><?=($model->addtime)?></div>
    </fieldset>


    <fieldset class="layui-elem-field layui-field-title">
        <legend>文章内容</legend>
        <div class="layui-field-box"><?=htmlspecialchars_decode($model->content)?></div>
    </fieldset>

</div>