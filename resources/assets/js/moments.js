
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
        placeholder: 'En este espacio comunique algunas anticipaciones acerca de los posibles recorridos o elaboraciones de los alumnos y las intervenciones o participaciones del docente en la gestión del Momento',
        height: 300
      });
  $('#teachersRecord').summernote({
        placeholder: 'Complete aquí los registros de trabajo entre docentes, donde prodrán incluir todos los materiales que aportan a la elaboración e interpretación del OE',
        height: 300
      });
  $('#resourceStudents').summernote({
        placeholder: 'Complete aquí los recursos necesarios para que el alumno trabaje en la propuesta',
        height: 300
  });
  $('#classroomRecord').summernote({
        placeholder: 'Complete aquí los registros del aula, adjuntando experiencias de la puesta en el aula, comentarios y registros de resoluciones de los alumnos',
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
