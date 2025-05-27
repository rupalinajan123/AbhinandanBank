
$(function() {
    $("#uploader").plupload({
      // General settings
      runtimes : 'html5,flash,silverlight,html4',
      url : '<?php echo site_url(); ?>webmanager/ImgGallery/upload',

      // User can upload no more then 20 files in one go (sets multiple_queues to false)
      max_file_count: 20,
      
      chunk_size: '1mb',

      // Resize images on clientside if we can
      resize : {
        width : 200, 
        height : 200, 
        quality : 90,
        crop: true // crop to exact dimensions
      },
      
      filters : {
        // Maximum file size
        max_file_size : '1000mb',
        // Specify what files to browse for
        mime_types: [
          {title : "Image files", extensions : "jpg,gif,png"},
          {title : "Zip files", extensions : "zip"}
        ]
      },

      // Rename files by clicking on their titles
      rename: true,
      
      // Sort files
      sortable: true,

      // Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
      dragdrop: true,

      // Views to activate
      views: {
        list: true,
        thumbs: true, // Show thumbs
        active: 'thumbs'
      },

      // Flash settings
      flash_swf_url : '<?php echo base_url(); ?>assets/admin/plupload-3.1.2/js/Moxie.swf',

      // Silverlight settings
      silverlight_xap_url : '<?php echo base_url(); ?>assets/admin/plupload-3.1.2/js/Moxie.xap'
    });
});

// Handle the case when form was submitted before uploading has finished
  $('#image_form').submit(function(e) {
    // Files in queue upload them first
    if ($('#uploader').plupload('getFiles').length > 0) {

      // When all files are uploaded submit form
      $('#uploader').on('complete', function() {
        $('#image_form')[0].submit();
      });

      $('#uploader').plupload('start');
    } else {
      alert("You must have at least one file in the queue.");
    }
    return false; // Keep the form from submitting
  });
