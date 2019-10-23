<div class="modal fade" id="momentsModal" tabindex="-1" role="dialog" aria-labelledby="momentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="momentsModalLabel">Crear Momento</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="frmMoment" class="form-horizontal" method="POST" action="{{ route('moment.store') }}">
              {{ csrf_field() }}
              <div class="container">
                <div class="col-md-8">
                    <label for="title" class="control-label"><p>Título del Momento</p></label>
                    <input id="title" type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="briefDescription" class="control-label"><p>Descripción Breve</p></label>
                    <textarea id="briefDescription" class="form-control" type="text" name="briefDescription" rows="5"></textarea>
                  </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="procedure" class="control-label"><p>Consigna para el alumno</p></label>
                    <textarea id="procedure" class="form-control" name="procedure" rows="5"></textarea>
                  </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="forecastDevelopment" class="control-label"><p>Previsiones acerca del desarrollo del momento en el aula</p></label>
                    <textarea id="forecastDevelopment" name="forecastDevelopment" class="form-control" rows="5"></textarea>
                  </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="teachersRecord" class="control-label"><p>Registros del trabajo entre docentes</p></label>
                    <textarea id="teachersRecord" name="teachersRecord" class="form-control" rows="5"></textarea>
                    <input type="file" name="teachersRecordFiles[]" multiple>
                  </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="resourceStudents" class="control-label"><p>Recursos para el alumno</p></label>
                    <textarea id="resourceStudents" name="resourceStudents" class="form-control" rows="5"></textarea>
                  </div>
              </div>
              <div class="container">
                  <div class="col-md-8">
                    <label for="classroomRecord" class="control-label"><p>Registros del aula</p></label>
                    <textarea id="classroomRecord" name="classroomRecord" class="form-control" rows="5"></textarea>
                    <input type="file" name="classroomRecordFiles[]">
                  </div>
              </div>

            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <span class="pull-right">
            <button id="btnCreateMoment" type="button" class="btn btn-primary">Crear</button>
          </span>
        </div>
      </div>
    </div>
</div>
