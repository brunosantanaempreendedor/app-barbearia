$(function() {
  var overlayBg = themeSettings.isDarkStyle() ?
    '#22252B' :
    '#fff';

  $('#block-ui-block-page').click(function() {
    $.blockUI({
      message: '<div class="sk-fold sk-primary mx-auto mb-4"><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div></div><h5 class="text-body">LOADING...</h5>',
      css: {
        backgroundColor: 'transparent',
        border: '0',
        zIndex: 9999999
      },
      overlayCSS:  {
        backgroundColor: overlayBg,
        opacity: 0.8,
        zIndex: 9999990
      }
    });

    setTimeout(function() {
      $.unblockUI();
    }, 5000);
  });

  $('#block-ui-block-element').click(function() {
    $('#block-ui-element-example').block({
      message: '<div class="sk-wave sk-primary mx-auto"><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div></div>',
      css: {
        backgroundColor: 'transparent',
        border: '0'
      },
      overlayCSS:  {
        backgroundColor: overlayBg,
        opacity: 0.8
      }
    });
  });

  $('#block-ui-unblock-element').click(function() {
    $('#block-ui-element-example').unblock();
  });
});
