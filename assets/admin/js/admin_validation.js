// JavaScript Document

$( document ).ready(function() {

	//Function for delete confirm
	$( ".con_delete" ).click(function() 
	{	var chk;
		var chk=confirm("Do you want to delete this record permanantly?");
		if(chk== true)
		{return true;}
		else 
		{return false;}
	});
	
	
$("#gallery_image").change(function (e) {

    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function () {
		  var file_size = file.size;   // alert("Width:" + this.width + "   Height: " + this.height);
		 // alert("Width:" + this.width + "   Height: " + this.height); 
		   if(this.width!=600 || this.height>300) 
		   {
			   $('#error_gallery_image').fadeIn('slow');
				document.getElementById('error_gallery_image').innerHTML='Upload valid banner of size 600 X 300 .';
				error_gallery_image.focus();
				//$('#err_banner_image').fadeOut(2000);
				document.getElementById('add_tender').disabled=true;
				return false;
		   }
		 if(file_size>2097152) {
		  $('#error_gallery_image').fadeIn('slow');
		// document.getElementById('error_gallery_image').innerHTML='File size should not be greater than 2MB';
		$("#error_gallery_image").html("File size should not be greater than 2MB");
		document.getElementById('add_tender').disabled=true;
		//$(".demoInputBox").css("border-color","#FF0000");
		return false;
	} 
	
		   else
		   {$('#error_gallery_image').fadeOut(2000);
			   	document.getElementById('add_tender').disabled=false;
				return true;
		   }//this will give you image width and height and you can easily validate here....
        };
        img.src = URL.createObjectURL(file);
    }
});


$("#gallery_image_edit").change(function (e) {
		var file, img;
		if ((file = this.files[0])) {
			img = new Image();
			img.onload = function () {
			  var file_size = file.size;   // alert("Width:" + this.width + "   Height: " + this.height);
			   // alert("Width:" + this.width + "   Height: " + this.height);
			   if(this.width!=600 || this.height>300) 
			   {
				   $('#error_gallery_image_edit').fadeIn('slow');
					document.getElementById('error_gallery_image_edit').innerHTML='Upload valid banner of size 600 X 300.';
					gallery_image_edit.focus();
					//$('#err_banner_image').fadeOut(2000);
					document.getElementById('edit_image').disabled=true;
					return false;
			   }
			 if(file_size>2097152) {
			  $('#error_gallery_image_edit').fadeIn('slow');
			// document.getElementById('error_gallery_image').innerHTML='File size should not be greater than 2MB';
			$("#error_gallery_image_edit").html("File size should not be greater than 2MB");
			document.getElementById('edit_image').disabled=true;
			//$(".demoInputBox").css("border-color","#FF0000");
			return false;
		} 
		
			   else
			   {$('#error_gallery_image').fadeOut(2000);
					document.getElementById('edit_image').disabled=false;
					return true;
			   }//this will give you image width and height and you can easily validate here....
			};
			img.src = URL.createObjectURL(file);
		}
	});
});

