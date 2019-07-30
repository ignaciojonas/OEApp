@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Lista de Autores
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('user.create')}}">Crear</a>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                    <td><a href="{{route('user.show', $user)}}">{{$user->name}}</a></td>
                    <td><a href="{{route('user.show', $user)}}">{{$user->email}}</a></td>
                    <td>
                      <a href="{{route('user.edit', $user->id)}}"><i class="fas fa-edit"></i></a>
                      <form id="delete-user-{{$user->id}}" action="{{route('user.destroy', $user)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <a href="#" onclick="document.getElementById('delete-user-{{$user->id}}').submit()"><i class="fas fa-trash"></i></a>
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
