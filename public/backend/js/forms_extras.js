// Autosize
$(function() {
  autosize($('#autosize-demo'));
});

// Vanilla Text Mask
$(function() {
  // Phone
  //

  vanillaTextMask.maskInput({
    inputElement: $('#text-mask-phone')[0],
    mask: ['(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/]
  });

  // Number
  //

  vanillaTextMask.maskInput({
    inputElement: $('#text-mask-number')[0],
    mask: textMaskAddons.createNumberMask({
      prefix: '$'
    })
  });

  // Email
  //

  vanillaTextMask.maskInput({
    inputElement: $('#text-mask-email')[0],
    mask: textMaskAddons.emailMask
  });

  // Date
  //

  vanillaTextMask.maskInput({
    inputElement: $('#text-mask-date')[0],
    mask: [/\d/, /\d/, '/', /\d/, /\d/, '/', /\d/, /\d/, /\d/, /\d/],
    pipe: textMaskAddons.createAutoCorrectedDatePipe('mm/dd/yyyy')
  });
});

// Knob
$(function() {
  if (themeSettings.isDarkStyle()) {
    $('.knob-example input').attr('data-bgcolor', 'rgba(255, 255, 255, .1)').each(function () {
      if (!$(this).attr('data-fgcolor') || $(this).attr('data-fgcolor') === '#222222') {
        $(this).attr('data-fgcolor', '#fff');
      }
    });
  }

  $('.knob-example input').knob();
});

// Bootstrap Maxlength
$(function() {
  $('.bootstrap-maxlength-example').each(function() {
    $(this).maxlength({
      warningClass: 'label label-success',
      limitReachedClass: 'label label-danger',
      separator: ' out of ',
      preText: 'You typed ',
      postText: ' chars available.',
      validate: true,
      threshold: +this.getAttribute('maxlength')
    });
  });
});

// Pwstrength-bootstrap
$(function() {
  $('#pwstrength-example').pwstrength({
    ui: {
      progressExtraCssClasses: 'pwstrength-progress',
      useVerdictCssClass: true,
      showErrors: true
    }
  });
});
