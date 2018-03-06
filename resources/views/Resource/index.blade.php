@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Lista de Recursos
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('resource.create')}}">Crear</a>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($resources as $resource)
                  <tr>
                    <td><a href="{{route('resource.show', $resource)}}">{{$resource->name}}</a></td>
                    <td><a href="{{route('resource.show', $resource)}}">{{$resource->description}}</a></td>
                    <td>
                      <form  action="{{route('resource.destroy', $resource)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      <a class='btn btn-primary btn-sm' href="{{route('resource.edit', $resource->id)}}">Editar</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
