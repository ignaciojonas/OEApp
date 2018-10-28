@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Lista de Momentos
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('moment.create')}}">Crear</a>
                </div>
                <table class="table table-striped">
                  <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Consigna</th>
                  </tr>
                  @foreach ($moments as $moment)
                  <tr>
                    <td><a href="{{route('moment.show', $moment)}}">{{$moment->title}}</a></td>
                    <td><a href="{{route('moment.show', $moment)}}">{{$moment->briefDescription}}</a></td>
                    <td><a href="{{route('moment.show', $moment)}}">{{$moment->procedure}}</a></td>
                    <td>
                      <form  action="{{route('moment.destroy', $moment)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      <a class='btn btn-primary btn-sm' href="{{route('moment.edit', $moment->id)}}">Editar</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
