<div class="modal fade" id="tagsModal" tabindex="-1" role="dialog" aria-labelledby="tagsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="tagsModalLabel">Crear Tag</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="frmTag" class="form-horizontal" method="POST" action="{{ route('tag.store') }}">
                {{ csrf_field() }}
                <div class="container">
                    <div class="col-md-5">
                        <label for="name" class="control-label"><p>Nombre</p></label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-5">
                      <label for="description" class="control-label"><p>Descripción</p></label>
                      <textarea id="description" name="description" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <span class="pull-right">
            <button id="btnCreateTag" type="button" class="btn btn-primary">Crear</button>
          </span>
        </div>
      </div>
    </div>
</div>
