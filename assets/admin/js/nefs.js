
		// validate field has value
		function validate_field(textArr){  
			var valid = 1;
			if(textArr.length > 0){ 
				for(var i = 0; i<textArr.length; i++){				 
					$("."+textArr[i]).each(function(){
						if($(this).val() == ""){
							$(this).css('border','1px solid red');
							valid = 0;
						} 
					});
				}
			} 
			
			if(valid == 1){
				return true;
			}else{
				return false;
			}			
		}  
		 
		
		// Remove dynamic added item
		 
		$(document).on("click", ".btn_remove" , function() {  
		 
			var btn_id = $(this).attr('id');
			var split_arr = btn_id.split("_");
			var pre = split_arr[0];
			var post = split_arr[1];
			var row_id = pre + '-' + post;  
			$('#'+row_id+'').remove(); 
		}); 	 
		
		// Remove error border
		$(document).on("blur", ".validate, .validate-file" , function() { 
			if($(this).val() != ""){
				$(this).css('border','1px solid #f1f1f1');
			}
		}); 
	
	//Dynamic activity chart 
		
		$('#add-activity').click(function(){
			var is_valid = true;  
			var rowcount = parseInt($('#tbody-activity tr').length);			
			var deliverable = rowcount+1;
			var classArr = ["activity-main","activity-sub","activity-unit","activity-quantity"];
			 
			is_valid = validate_field(classArr); 			
		 	
			var activity = parseInt($('#tbody-activity button:last').attr('value')); // increment variable for activity
			  
			
			if(is_valid){
				$('#div-activity .error').remove();// remove error
				//$("#alert-message .error").remove(); 					 
				activity++; 
				$('#tbody-activity').append('<tr id="activityrow-'+activity+'"><td>'+deliverable+'</td><td><select name="main_objective[][value]" class="form-control activity-main validate"><option value="">-- Select--</option><option value="1">Desk Review & Survey Tools</option><option value="2">Field Survey</option><option value="3">Data Analysis</option><option value="4">Report Writing</option></select></td>  <td><input type="text" name="sub_objective[][value]" placeholder="" class="form-control activity-sub validate" value="" /></td><td><select name="unit[][value]" class="form-control activity-unit validate"><option value="">-- Select--</option><option value="quarter">Quarter</option><option value="month">Month</option><option value="week">Week</option><option value="day">Day</option></select></td><td><input type="text" name="quantity[][value]" placeholder="" class="form-control activity-quantity validate" value="" /></td><td><input type="text" name="remark[][value]" placeholder="" class="form-control activity-remark" value="" /></td><td><button type="button" id="activityrow_'+activity+'" class="btn btn-danger btn_remove" value="'+activity+'">X</button></td></tr>');  
			}
		}); 
		 
		
		 
	// NEFS: 
	//Activity chart form submit
	 
	$("#activity-form").submit(function (e) { 
		e.preventDefault();
		$('#activity-form .error').remove();// remove error
		$("#alert-message .alert").remove();  
			$.ajax({
					type: "POST",
					url: ""+site_path+"webmanager/nefs/save_activity_chart", 
					data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
					beforeSend: function(){
                       $('#preloader-loader').css("display", "block");
                    },
					success: function(response){
                    	
                    	if(response.status == 'success') {  
							swal("Success!", response.message, "success"); 
						}else{ 
						$("#alert-message").append('<div class="alert alert-danger alert-dismissable"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>'+response.message+'</div>');
							$.each(response.errors, function(k, v) {
								$.each(v, function(key, value) { 
									//$("#alert-message").append("<span class='error'>" + value + "</span>");
									//$("#alert-message").append('<div class="alert alert-danger">'+response.message+'</div>'); 
									$("#"+k+"").append("<span class='error'>" + value + "</span>");
									//$("#"+k+"").css("border","1px solid red");
								});
							});
							  
						}
						// scroll to top
							$('html, body').animate({
								scrollTop: $('#content-div').offset().top
							}, 'fast'); 
                	}, 
					complete: function(){
                       $('#preloader-loader').css("display", "none");
                    }
				}); 
		});  