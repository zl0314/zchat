(function($) {

	var settings = {
		// fileType : {
		// 	img : ['jpg','JPG','jpeg','JPEG','gif','GIF','PNG','png'],
		// 	voice : ['mp3'],
		// 	zip : ['zip','ZIP','rar','RAR']
		// },
        fileType : ['jpg','JPG','jpeg','JPEG','gif','GIF','PNG','png'],
		maxSize  : 30*1024*1024,
		url      : '/default/certificate',
		sucFn    : function(){console.log('success')}
	};

	$.fn.extend({

		upload:function(options){
			var that = this;
			settings = $.extend(settings,options);

			//验证文件后缀
			function checkType(){
				var filepath = that.val(),
					filetype = settings.file_type ? settings.file_type : that.attr('filetype'),
					thisType = filepath.split('.').pop();
					// console.log(settings);
                if(filepath){
					var pass = false;
					$.each(settings.fileType,function(key,val){
						console.log(thisType,val);
						if(thisType == val){
							pass = true;
							return pass;
						}
					});
					return pass;
				}
			}

			//验证文件格式
			if(!checkType()){
				alert('文件格式不正确');
				return false;
			}

			//验证文件大小
			var fileSize = that[0].files[0].size;
			if(fileSize > settings.maxSize){
				alert('文件超出规定大小');
				return false;
			}

			//上传相关
			var thisId = that.attr('id');
			var options={
        	    url:settings.url,
        	    type:"post",
        	    success:settings.sucFn
        	};
        	if(!that.hasClass('inited')){
        		that.addClass('inited')
        		$("#form_"+thisId).submit(function() {
        		    $(this).ajaxSubmit(options);
        		    return false;
        		});
        	}
    		$("#form_"+thisId).submit();

		}

	});
})(jQuery);