$(document).ready(function() {
  $('#addRecord').click(function(event){
    event.preventDefault();
    let count = 1 + parseInt($('#records-count').val())
    $('#Records').append('<div class="form-group"><label for="record-' + count + '" class="col-md-4 control-label">Registro</label><div class="col-md-6"><textarea id="record-' + count + '" name=record-' + count + '" rows="5" cols="20"> </textarea></div><label for="file-' + count + '[]" class="col-md-4 control-label">Adjuntos</label><div class="col-md-6"><input type="file" name="file-' + count + '[]" multiple></div></div>');
    $('#records-count').val(count);
  })
});
