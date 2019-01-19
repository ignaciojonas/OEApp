@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
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
                    <td><a href="{{route('moment.show', $moment)}}">{!!$moment->briefDescription!!}</a></td>
                    <td><a href="{{route('moment.show', $moment)}}">{!!$moment->procedure!!}</a></td>
                    <td>
                      <form id="delete-moment-{{$moment->id}}" action="{{route('moment.destroy', $moment)}}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="delete">
                        <a href="#" onclick="document.getElementById('delete-moment-{{$moment->id}}').submit();"><i class="fas fa-trash"></i></a>
                      </form>
                      <a href="{{route('moment.edit', $moment->id)}}"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
