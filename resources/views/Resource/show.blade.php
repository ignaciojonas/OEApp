@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/resources.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">RECURSO</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" >
          {{ csrf_field() }}
            <input name="_method" type="hidden" value="put">

            <div class="container">
              <h4>Nombre</h4>
              <p>{!!$resource->name!!} </p>
            </div>

            <div class="container">
              <h4>Tipo</h4>
              <p>{!!$resource->type!!} </p>
            </div>

            @if ($resource->type == "Geogebra")
              <div id="ggb-element"></div>
              <script>
                var ggbApp = new GGBApplet({"appName": "graphing", "width": 800, "height": 600, "showToolBar": true, "showAlgebraInput": true, "showMenuBar": true, "material_id":"{$resource->geogebra_id)}" }, true);
                window.addEventListener("load", function() {
                  ggbApp.inject('ggb-element');
                });
              </script>
            @else
              @if(isset($resource->path))
                <div class="container">
                  <h4>Archivo</h4>
                  <a href="{{asset('/storage/'.$resource->path)}}" download="{{$resource->name}}">Bajar archivo actual</a>
                </div>
              @else
                <div class="container">
                  <h4>Link</h4>
                  <a href="{{asset($resource->link)}}" target="popup" onclick="window.open('', 'popup', 'width = 800, height = 600')">{{$resource->link}}</a>
                </div>
              @endif
            @endif

        </form>
    </div>
</div>
@endsection
