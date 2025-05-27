var site_path = 'http://demo.teamgrowth.net/msetcl_new/index.php/';
//To change site theme
function change_theme(theme)
{
		$.ajax({
		type: "POST",
		url: ""+site_path+"welcome/ch_theme/"+theme+"",
			success: function(msg)
			{
				location.reload(); 
			}
		});
}

// To change language
function chage_language(lan)
{
	if(lan!="")
		{
			$.ajax({
			type: "POST",
			url: ""+site_path+"welcome/ch_lang/"+lan+"",
			success: function(msg)
				{
					location.reload(); 
				}
			});	
		}
}
	    jQuery(".ex_link").on('click',function () {
		if(language_selected=='EN')
		{var r = confirm("You are being redirected to a Non-Govermental site. Do you want to proceed?");}
		else
		{var r = confirm("आपण अ -सरकारी साइटवर पुनर्निर्देशित जात आहेत.तुम्हाला नक्की पुढे जायचे आहे का?");}
    	if (r == true) 
		{return true;} else {return false ; }
	   });
	   
	   
function change_signbox(box)
{
	if(box == '1')
	{
		$('.p1').css('display','none');
		$('.p2').css('display','block');
	}
	else
	{
		$('.p2').css('display','none');
		$('.p1').css('display','block');
	}
}

$( ".feedback_submit" ).click(function() {
	$("#name_err").css({ 'display': "none" });
	$("#mobile_err").css({ 'display': "none" });
	$("#subject_err").css({ 'display': "none" });
	$("#message_err").css({ 'display': "none" });
	$("#email_err").css({ 'display': "none" });
	$("#captcha_err").css({ 'display': "none" });
	
	var full_name = $( "#full_name" ).val();
	var mobile_no = $( "#mobile_no" ).val();
	var email_id = $( "#email_id" ).val();
	var subject = $( "#subject" ).val();
	var msg_comment = $( "#msg_comment" ).val();
	var captcha = $( "#captcha" ).val();
	var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	var filter =/^[a-zA-Z\s-,. ]+$/   ;
	var subject_filter =/^[a-zA-Z0-9\s~!@#$%^&*()-=|\:;"',.?/ ]+$/   ;
	
		if(full_name.trim()==""  )
		{
			$("#name_err").css({ 'display': "block" });
			$( "#full_name" ).focus();
			return false;
		}
		else if( !filter.test(full_name))
		{
			$("#name_err").css({ 'display': "block" });
			$( "#full_name" ).focus();
			return false;
		}
		else if(mobile_no=="")
		{
			$("#mobile_err").css({ 'display': "block" });
			$( "#mobile_no" ).focus();
			return false;
		}
		
		else if(isNaN(mobile_no))
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(mobile_no.length < 10 )
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(mobile_no.length > 20 )
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(email_id=="")
		{
			$("#email_err").css({ 'display': "block" });
			$( "#email_id" ).focus();
			return false;
		}
		else if(!pattern.test(email_id)) 
		{
			$("#email_err").css({ 'display': "block" });
			$( "#email_id" ).focus();
			return false;
		}
		else if(subject=="")
		{
			$("#subject_err").css({ 'display': "block" });
			$( "#subject" ).focus();
			return false;
		}
		
		else if( !subject_filter.test(subject))
		{
			$("#subject_err").css({ 'display': "block" });
			$( "#subject" ).focus();
			return false;
		}
		else if(msg_comment=="") 
		{
			$("#message_err").css({ 'display': "block" });
			$( "#msg_comment" ).focus();
			return false;
		}
		else if(!subject_filter.test(msg_comment)) 
		{
			$("#message_err").css({ 'display': "block" });
			$( "#msg_comment" ).focus();
			return false;
		}
		else if(captcha=="") 
		{
			$("#captcha_err").css({ 'display': "block" });
			$( "#captcha" ).focus();
			return false;
		}
});


$( ".application_submit" ).click(function() {
	$("#name_err").css({ 'display': "none" });
	$("#mobile_err").css({ 'display': "none" });
	$("#subject_err").css({ 'display': "none" });
	$("#message_err").css({ 'display': "none" });
	$("#email_err").css({ 'display': "none" });
	$("#captcha_err").css({ 'display': "none" });
	$("#file_err").css({ 'display': "none" });
	
	var full_name = $( "#full_name" ).val();
	var mobile_no = $( "#mobile_no" ).val();
	var email_id = $( "#email_id" ).val();
	var subject = $( "#subject" ).val();
	var msg_comment = $( "#msg_comment" ).val();
	var captcha = $( "#captcha" ).val();
	var cv = $( "#cv" ).val();
	
	var cv_ext = cv.substring(cv.lastIndexOf('.')+1,cv.length);
	cv_ext = cv_ext.toLowerCase();
	
	var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
	var filter =/^[a-zA-Z\s-,. ]+$/   ;
	var subject_filter =/^[a-zA-Z0-9\s~!@#$%^&*()--=|\:;"',.?/ ]+$/   ;
		if(full_name.trim()==""  )
		{
			$("#name_err").css({ 'display': "block" });
			$( "#full_name" ).focus();
			return false;
		}
		else if( !filter.test(full_name))
		{
			$("#name_err").css({ 'display': "block" });
			$( "#full_name" ).focus();
			return false;
		}
		else if(mobile_no=="")
		{
			$("#mobile_err").css({ 'display': "block" });
			$( "#mobile_no" ).focus();
			return false;
		}
		else if(isNaN(mobile_no))
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(mobile_no.length < 10 )
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(mobile_no.length > 20 )
		{
			$("#mobile_err").css({ 'display': "block" });
			return false;
		}
		else if(email_id=="")
		{
			$("#email_err").css({ 'display': "block" });
			$( "#email_id" ).focus();
			return false;
		}
		else if(!pattern.test(email_id)) 
		{
			$("#email_err").css({ 'display': "block" });
			$( "#email_id" ).focus();
			return false;
		}
		else if(subject=="")
		{
			$("#subject_err").css({ 'display': "block" });
			$( "#subject" ).focus();
			return false;
		}
		else if( !subject_filter.test(subject))
		{
			$("#subject_err").css({ 'display': "block" });
			$( "#subject" ).focus();
			return false;
		}
		else if(msg_comment=="") 
		{
			$("#message_err").css({ 'display': "block" });
			$( "#msg_comment" ).focus();
			return false;
		}
		else if(!subject_filter.test(msg_comment)) 
		{
			$("#message_err").css({ 'display': "block" });
			$( "#msg_comment" ).focus();
			return false;
		}
		else if(cv=="") 
		{
			$("#file_err").css({ 'display': "block" });
			return false;
		}
		else if(cv_ext != 'pdf' && cv_ext != 'docx' && cv_ext != 'doc')
		{
			$("#file_err1").css({ 'display': "block" });
			return false;
		}
		
		else if(captcha=="") 
		{
			$("#captcha_err").css({ 'display': "block" });
			$( "#captcha" ).focus();
			return false;
		}
		else
		{
			return true;}
});
	   
