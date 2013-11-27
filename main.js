$(function() {

  $('#html-target,section li,.language-less,.language-sass').hide();
  var clickCount = 0;
  $(document).click(function() {
    clickCount++;
    if (clickCount == 1) {
      $('section li:eq(0)').fadeIn();
    }
    if (clickCount == 2) {
      $('section li:eq(1)').fadeIn();
    }
    if (clickCount == 3) {
      $('section li:eq(2)').fadeIn();
    }
    if (clickCount == 4) {
      $('section li:eq(3)').fadeIn();
    }
    if (clickCount == 5) {
      $('#html-target').fadeIn();
    }
    if (clickCount == 6) {
      $('section li:eq(0) .language-html').hide();
      $('section li:eq(0) .language-less').fadeIn();
    }
    if (clickCount == 7) {
      $('section li:eq(1) .language-html').hide();
      $('section li:eq(1) .language-less').fadeIn();
    }
    if (clickCount == 8) {
      $('section li:eq(2) .language-html').hide();
      $('section li:eq(2) .language-sass').fadeIn();
    }
    if (clickCount == 9) {
      $('section li:eq(3) .language-html').hide();
      $('section li:eq(3) .language-sass').fadeIn();
    }
  });

});