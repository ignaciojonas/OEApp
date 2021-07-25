@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/resources.js') }}"></script>
  <script src="https://www.geogebra.org/apps/deployggb.js"></script>

@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">RECURSO</div>
    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('resource.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-md-2 control-label"><p>Nombre</p></label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" >
                </div>
            </div>

            <div class="form-group">
                <label for="type" class="col-md-2 control-label"><p>Tipo</p></label>
                <div class="col-md-6">
                    <select class="form-control" name="type" id="type">
                       @foreach ($types as $type)
                        <option value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group link">
                <label for="link" class="col-md-2 control-label"><p>Link</p></label>
                <div class="col-md-6">
                    <input id="link" type="text" class="form-control" name="link" >
                </div>
            </div>

            <div class="form-group file">
                <label for="document" class="col-md-2 control-label"><p>Archivo</p></label>
                <div class="col-md-6">
                    <input id="document" type="file" class="form-control" name="document">
                </div>
            </div>

            <div class="form-group ggb-element">
                <label for="geotype" class="col-md-2 control-label"><p>Seleccione tipo de elemento Geogebra</p></label>
                <div class="col-md-6">
                      <select class="form-control" name="geotype" id= "geotype">
                        @foreach ($geotypes as $geotype)
                          <option value="{{$geotype}}">{{$geotype}}</option>
                        @endforeach
                      </select>
                </div>
            </div>

           <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Grabar
                    </button>
                </div>
          </div>
        </form>
    </div>
</div>

@endsection
