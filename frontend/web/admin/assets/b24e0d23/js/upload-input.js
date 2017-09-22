(function($) {

    var file_type = typeof(window.file_type) == 'undefined' ? 'img' : window.file_type;
    var input_name = typeof(window.input_name) == 'undefined' ? 'upfile' : window.input_name;
	var allow_file_types = typeof(window.allow_file_types) == 'undefined' ? ['jpg','JPG','jpeg','JPEG','gif','GIF','PNG','png'] : window.allow_file_types;

	var form_temp = [];
	var toAppend = [
		'<form id="form_upfile" action="" method="post" enctype="multipart/form-data" style="position:absolute;left:-100px;top:-300px;">',
            '<input id="'+input_name+'" class="file_upload hide" type="file" name="'+input_name+'" filetype="'+file_type+'">',
        '</form>'
	].join('');
	
	form_temp.push(toAppend);

	if($('.form_temp').length < 1){
		$('body').append('<div class="form_temp hide" style="display:none;"></div>');
	}
	$('.form_temp').append(form_temp.join(''));
 	$('.choose_btn').click(function(){
 		var input= $('#'+input_name);
 		input.attr('from', $(this).attr('id'));
 		input.click();
 	});
 	$('.file_upload').on('change',function(){
 		var from = $('#'+input_name).attr('from');
 		var thisUrl = $('.'+from).parent().attr('data-url');
            maxSize  = $('.'+from).parent().attr('data-maxsize');

 		$(this).upload({
 			url     : thisUrl,
            maxSize : maxSize,
            fileType : allow_file_types,
            // file_type : file_type,
            filetype :file_type,
 			sucFn   : function(json){
 				var from = $('#'+input_name).attr('from');
 				var domainUrl = $('.'+from).attr('domain-url');
 				json = $.parseJSON(json);
 				if(json.state == 'SUCCESS'){
 					$('input[up-id='+ from+']').val(json.url);
 					if(file_type == 'img'){
                        $('.'+ from).html($('<img />').attr('src', domainUrl+json.url));
					}else{
 						var html = '<audio controls="controls" style="padding-top:15px;">';
                            html += '<source src="'+domainUrl+json.url+'" />';
							html += 'Your browser does not support the audio element';
							html += '</audio>';
                        $('.per_real_img').html(html);
                        $('.per_upload_img').css({
							'margin-top' : '15px',
							'height' : '32px'
						});
					}

 				}else{
                    alert(json.state);
 				}
 			}
 		});
 	});

})(jQuery)