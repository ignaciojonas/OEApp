@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Lista de Tags
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('tag.create')}}">Crear</a>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($tags as $tag)
                  <tr>
                    <td><a href="{{route('tag.show', $tag)}}">{{$tag->name}}</a></td>
                    <td><a href="{{route('tag.show', $tag)}}">{{str_limit($tag->description, $limit = 50, $end = '...') }}</a></td>
                    <td>
                      <form  action="{{route('tag.destroy', $tag)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      <a class='btn btn-primary btn-sm' href="{{route('tag.edit', $tag->id)}}">Editar</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
