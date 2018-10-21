$(document).ready(function() {
  $('#briefDescription').summernote({
        placeholder: 'Complete aquí la descripción del momento',
        height: 300
      });
  $('#procedure').summernote({
        placeholder: 'Complete aquí la consigna del momento',
        height: 300
      });
  $('#forecastsDevelopment').summernote({
        placeholder: 'Complete aquí las previsiones acerca del desarrollo del momento en el aula',
        height: 300
      });
  $('#recordsTeachers').summernote({
        placeholder: 'Complete aquí los registros de trabajo entre docentes',
        height: 300
      });
  $('#resourceStudents').summernote({
        placeholder: 'Complete aquí los recursos para el alumno',
        height: 300
  });
  $('#classroomRecords').summernote({
        placeholder: 'Complete aquí los registros del aula',
        height: 300
  });
});
