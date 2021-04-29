
$(document).ready(function() {
  function toggleControls(value){
    if (value == 'Link') {
      $('.link').show();
      $('.file').hide();
    }
    else{
      $('.link').hide();
      $('.file').show();
    }
  }

  toggleControls($('#type')[0].value);

  $('#type').change(function(){
    toggleControls(this.value);
  });
});
