jQuery(document).ready(function($) {
  $('.first_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'First Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.first_img').attr('src', attachment.url);
      $('.first_img_url').val(attachment.url);
    })
    .open();
  });  
  $('.second_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Second Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.second_img').attr('src', attachment.url);
      $('.second_img_url').val(attachment.url);
    })
    .open();
  });  
  $('.third_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Third Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.third_img').attr('src', attachment.url);
      $('.third_img_url').val(attachment.url);
    })
    .open();
  });   
  $('.fourth_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'Fourth Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.fourth_img').attr('src', attachment.url);
      $('.fourth_img_url').val(attachment.url);
    })
    .open();
  });  
  $('.fifth_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'fifth Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.fifth_img').attr('src', attachment.url);
      $('.fifth_img_url').val(attachment.url);
    })
    .open();
  });    
  $('.sixth_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'sixth Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.sixth_img').attr('src', attachment.url);
      $('.sixth_img_url').val(attachment.url);
    })
    .open();
  });  
$('.codzilla_classfications_img_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'First Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.codzilla_classfications_img').attr('src', attachment.url);
      $('.codzilla_classfications_img_url').val(attachment.url);
    })
    .open();
  });
$('.company_profile_upload').click(function(e) {
    e.preventDefault();
    var custom_uploader = wp.media({
      title: 'First Image Choose',
      button: {
        text: 'Upload Image'
      },
      multiple: false  // Set this to true to allow multiple files to be  selected
    })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      $('.company_profile').attr('src', attachment.url);
      $('.company_profile_url').val(attachment.url);
    })
    .open();
  });
});