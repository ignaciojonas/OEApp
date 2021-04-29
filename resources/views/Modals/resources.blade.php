<div class="modal fade" id="resourcesModal" tabindex="-1" role="dialog" aria-labelledby="resourcesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="resourcesModalLabel">Crear Recurso</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="frmResource" class="form-horizontal" method="POST" action="{{ route('resource.store') }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container">
                    <div class="col-md-5">
                        <label for="name" class="control-label"><p>Nombre</p></label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-5">
                      <label for="type" class="control-label"><p>Tipo</p></label>
                          <select class="form-control" name="type" id="type">
                              @foreach ($types as $type)
                              <option value="{{$type}}">{{$type}}</option>
                              @endforeach
                          </select>
                    </div>
                </div>
                <div class="container link">
                  <div class="col-md-5">
                    <label for="link" class="control-label"><p>Link</p></label>
                    <input id="link" type="text" class="form-control" name="link" >
                  </div>
                </div>

                <div class="container file">
                  <div class="col-md-5">
                    <label for="document" class="control-label"><p>Archivo</p></label>
                    <input id="document" type="file" class="form-control" name="document">
                  </div>
                </div>

            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <span class="pull-right">
            <button id="btnCreateResource" type="button" class="btn btn-primary">Crear</button>
          </span>
        </div>
      </div>
    </div>
</div>
