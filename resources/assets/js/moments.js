$(document).ready(function() {
  $('#procedure').summernote({
        placeholder: 'Complete aquí la consigna del momento',
        height: 300
      });
  $('#developmentForecast').summernote({
        placeholder: 'Complete aquí las previsiones acerca del desarrollo del momento en el aula',
        height: 300
      });
  $('#registrationTeacher').summernote({
        placeholder: 'Complete aquí los registros de trabajo entre docentes',
        height: 300
      });
  $('#resourcesStudent').summernote({
        placeholder: 'Complete aquí los recursos para el alumno',
        height: 300
  });
  $('#classroomRecord').summernote({
        placeholder: 'Complete aquí los registros del aula',
        height: 300
  });
});
