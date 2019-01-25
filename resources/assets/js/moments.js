
$(document).ready(function() {
  $('#briefDescription').summernote({
        placeholder: 'Complete aquí la descripción del momento',
        height: 300
      });
  $('#procedure').summernote({
        placeholder: 'Complete aquí la consigna del momento',
        height: 300
      });
  $('#forecastDevelopment').summernote({
        placeholder: 'Complete aquí las previsiones acerca del desarrollo del momento en el aula',
        height: 300
      });
  $('#teachersRecord').summernote({
        placeholder: 'Complete aquí los registros de trabajo entre docentes',
        height: 300
      });
  $('#resourceStudents').summernote({
        placeholder: 'Complete aquí los recursos para el alumno',
        height: 300
  });
  $('#classroomRecord').summernote({
        placeholder: 'Complete aquí los registros del aula',
        height: 300
  });

    function deleteFile(id){
      event.preventDefault();
      $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
              });
      $.ajax({
            url: '/file/' + id,
            type: 'DELETE',
            success: function(result) {
              $('#file-' + id).remove();
            }
        });
    }

  $('.delete-file').click(function(){
    deleteFile($(this).data('file-id'));
  });


});
