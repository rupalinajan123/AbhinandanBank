/**



 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.



 * For licensing, see LICENSE.html or http://ckeditor.com/license



 */






CKEDITOR.editorConfig = function( config ) {  

var blockTags = ['div','h1','h2','h3','h4','h5','h6','p','pre','ul','li'];
var rules = {
indent : false,
breakBeforeOpen : false,
breakAfterOpen : false,
breakBeforeClose : false,
breakAfterClose : true
};

	// Define changes to default configuration here. For example:



	// config.language = 'fr';



	 config.uiColor = '#EEEEEE';



	 config.width = '750px';



	 config.height = '300px';



	



	config.language = 'en';


	config.filebrowserUploadUrl = '{{asset(assets/admin/ckeditor/ckupload.php)}}';

	config.resize_enabled = false;

	config.removeFormatTags = 'iframe,big,code,del,dfn,em,ins,kbd';


					
	config.toolbar = 'Full';
		config.allowedContent = true;
		CKEDITOR.config.allowedContent= true;
		CKEDITOR.config.autoParagraph = false;
		 
		  //CKEDITOR.config.ignoreEmptyParagraph = false; 
		  // CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
		    config.removePlugins = 'htmldataprocessor';
		extraAllowedContent: 'style;*[id,rel](*){*}';
		config.extraAllowedContent = '*(*)';

					
					
	config.toolbar_MyToolbar =



	[



	{ name: 'document', items : [ 'NewPage','Preview' ] },
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'
                 ,'Iframe' ] },
                '/',
		{ name: 'styles', items : [ 'Styles','Format' ] },
		{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'tools', items : [ 'Maximize','-','About' ] }


	];
	
	config.toolbar_Full =
[
	{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
	{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 
        'HiddenField' ] },
	'/',
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
	{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
	'/',
	{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
	{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
];
 
 
 config.toolbar_Basic =
[
	['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','About']
];



};



