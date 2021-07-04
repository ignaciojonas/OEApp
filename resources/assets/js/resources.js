require('./bootstrap');
$(document).ready(function() {
  function toggleControls(value){
    if (value == 'Link') {
      $('.link').show();
      $('.file').hide();
      $('.ggb-element').hide();
    }
    else if (value == 'Documento'){
            $('.link').hide();
            $('.file').show();
            $('.ggb-element').hide();
          }
          else if (value == 'Geogebra'){
                  $('.link').hide();
                  $('.file').hide();
                  $('.ggb-element').show();
                }
                else {
                  $('.link').hide();
                  $('.file').show();
                  $('.ggb-element').hide();
                }
  }

  toggleControls($('#type')[0].value);

  $('#type').change(function(){
    toggleControls(this.value);
  });
});
