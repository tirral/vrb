jQuery(function($) {
  var frame,
    addImgLink = $('.image_upload1'),
    imgIdInput = $('.image1');
  addImgLink.on('click', function(event) {
    event.preventDefault();
    if (frame) {
      frame.open();
      return;
    }
    frame = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame.on('select', function() {
      var attachment = frame.state().get('selection').first().toJSON();
      imgIdInput.val(attachment.url);
    });
    frame.open();
  });

});




jQuery(function($) {
  var frame2,
    addImgLink2 = $('.image_upload2'),
    imgIdInput2 = $('.image2');
  addImgLink2.on('click', function(event) {
    event.preventDefault();
    if (frame2) {
      frame2
      .open();
      return;
    }
    frame2 = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame2.on('select', function() {
      var attachment = frame2.state().get('selection').first().toJSON();
      imgIdInput2.val(attachment.url);
    });
    frame2.open();
  });

});




jQuery(function($) {
  var frame3,
    addImgLink3 = $('.image_upload3'),
    imgIdInput3 = $('.image3');
  addImgLink3.on('click', function(event) {
    event.preventDefault();
    if (frame3) {
      frame3
      .open();
      return;
    }
    frame3 = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame3.on('select', function() {
      var attachment = frame3.state().get('selection').first().toJSON();
      imgIdInput3.val(attachment.url);
    });
    frame3.open();
  });

});




jQuery(function($) {
  var frame4,
    addImgLink4 = $('.image_upload4'),
    imgIdInput4 = $('.image4');
  addImgLink4.on('click', function(event) {
    event.preventDefault();
    if (frame4) {
      frame4
      .open();
      return;
    }
    frame4 = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame4.on('select', function() {
      var attachment = frame4.state().get('selection').first().toJSON();
      imgIdInput4.val(attachment.url);
    });
    frame4.open();
  });

});



jQuery(function($) {
  var frame5,
    addImgLink5 = $('.image_upload5'),
    imgIdInput5 = $('.image5');
  addImgLink5.on('click', function(event) {
    event.preventDefault();
    if (frame5) {
      frame5
      .open();
      return;
    }
    frame5 = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame5.on('select', function() {
      var attachment = frame5.state().get('selection').first().toJSON();
      imgIdInput5.val(attachment.url);
    });
    frame5.open();
  });

});




jQuery(function($) {
  var frame6,
    addImgLink6 = $('.image_upload6'),
    imgIdInput6 = $('.image6');
  addImgLink6.on('click', function(event) {
    event.preventDefault();
    if (frame6) {
      frame6
      .open();
      return;
    }
    frame6 = wp.media({
      title: 'Select or Upload Image',
      button: {
        text: 'Use this Image'
      },
      multiple: false // Set to true to allow multiple files to be selected
    });
    frame6.on('select', function() {
      var attachment = frame6.state().get('selection').first().toJSON();
      imgIdInput6.val(attachment.url);
    });
    frame6.open();
  });

});
