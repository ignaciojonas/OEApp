@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/tags.js') }}"></script>
@stop

@section('content')
<div class="container">
    <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MARCADOR</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" >
              {{ csrf_field() }}
                <input name="_method" type="hidden" value="put">

                <div class="container">
                  <h4>Nombre</h4>
                  <p>{!!$tag->name!!}</p>
                </div>

                <div class="container">
                  <h4>Descripción</h4>
                  <p>{!!$tag->description!!}</p>
                </div>
            </form>
        </div>
</div>
@endsection
