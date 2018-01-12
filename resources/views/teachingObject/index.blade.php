@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Objeto de Enseñanza</div>
                <table class="table table-striped">
                  <tr>
                    <th>Titulo</th>
                    <th>Autores</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($teachingObjects as $teachingObject)
                  <tr>
                    <td>{{$teachingObject->title}}</td>
                    <td>{{$teachingObject->authorsNames()}}</td>
                    <td>
                      <form  action="{{route('teachingObject.destroy', $teachingObject->id)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <button type="submit" class="btn btn-danger">Delete</button>
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
