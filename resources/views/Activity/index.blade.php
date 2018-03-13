@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Lista de Actividades
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('activity.create')}}">Crear</a>
                  <a class='btn btn-primary btn-sm' href="{{route('home')}}">Cerrar</a>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th>Consigna</th>
                    <th>Sugerencias</th>
                    <th>Expectativas de logro</th>
                    <th>Implementación y Resultados</th>
                  </tr>
                  @foreach ($activities as $activity)
                  <tr>
                    <td><a href="{{route('activity.show', $activity)}}">{{$activity->procedure}}</a></td>
                    <td><a href="{{route('activity.show', $activity)}}">{{$activity->suggestions}}</a></td>
                    <td><a href="{{route('activity.show', $activity)}}">{{$activity->achievementExpectation}}</a></td>
                    <td><a href="{{route('activity.show', $activity)}}">{{$activity->implementationResult}}</a></td>
                    <td>
                      <form  action="{{route('activity.destroy', $activity)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      <a class='btn btn-primary btn-sm' href="{{route('activity.edit', $activity->id)}}">Editar</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
