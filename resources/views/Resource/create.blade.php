@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/resources.js') }}"></script>
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recursos</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('resource.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Tipo</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                   @foreach ($types as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group link">
                            <label for="link" class="col-md-4 control-label">Link</label>
                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" >
                            </div>
                        </div>

                        <div class="form-group file">
                            <label for="document" class="col-md-4 control-label">Archivo</label>
                            <div class="col-md-6">
                                <input id="document" type="file" class="form-control" name="document" >
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="hidden" id="records-count" name="records-count" value="1">
                            <a id="addRecord" href='#'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                            <div id="Records">
                              <div class="form-group">
                                <label for="record-1" class="col-md-4 control-label">Registro</label>
                                <div class="col-md-6">
                                    <textarea id="record-1" name="record-1" rows="5" cols="20"> </textarea>
                                </div>
                                <label for="file-1" class="col-md-4 control-label">Adjuntos</label>
                                <div class="col-md-6">
                                    <input type="file" name="file-1[]" id="file-1[]" multiple>
                                </div>
                              </div>
                            </div>
                        </div>

                       <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Grabar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
