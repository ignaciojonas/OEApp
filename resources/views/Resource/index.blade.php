@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
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
                    <td><a href="{{route('resource.show', $resource)}}">{{$resource->type}}</a></td>
                    <td>
                      <a href="{{route('resource.edit', $resource->id)}}"><i class="fas fa-edit"></i></a>
                      <form  id= "delete-resource-{{$resource->id}}" action="{{route('resource.destroy', $resource)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <a href="#" onclick="document.getElementById('delete-resource-{{$resource->id}}').submit()"><i class="fas fa-trash"></i></a>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
