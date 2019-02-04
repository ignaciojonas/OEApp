@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/tags.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MARCADOR</div>
      <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('tag.update', $tag) }}">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="put">

            <div class="container">
                <label for="name" class="col-md-2 control-label"><p>Nombre</p></label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{$tag->name}}">
                </div>
            </div>

            <div class="container">
                <label for="description" class="col-md-2 control-label"><p>Descripción</p></label>
                <div class="col-md-6">
                    <textarea id="description" name="description">{!!$tag->description!!}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Actualizar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
