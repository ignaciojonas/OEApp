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
                    <form class="form-horizontal" method="POST" >
                        <input name="_method" type="hidden" value="put">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$resource->name}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Tipo</label>
                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="name" value="{{$resource->type}}" readonly>
                            </div>
                        </div>

                        <div class="form-group link">
                            <label for="link" class="col-md-4 control-label">Link</label>
                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control" name="link" value="{{$resource->link}}" readonly>
                            </div>
                        </div>

                        @if(isset($resource->path))
                        <div class="form-group file">
                            <label for="document" class="col-md-4 control-label">Archivo</label>
                            <div class="col-md-6">
                                <a href="{{asset('storage/'.$resource->path)}}" download="{{$resource->name}}">Bajar archivo actual</a>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
