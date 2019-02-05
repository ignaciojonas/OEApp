@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Objeto de Enseñanza
                  <a class='btn btn-primary btn-sm pull-right' href="{{route('teachingObject.create')}}">Crear</a>
                </div>

                <table class="table table-striped">
                  <tr>
                    <th>Título</th>
                    <th>Autores</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($teachingObjects as $teachingObject)
                     <tr>
                       <td><a href="{{route('teachingObject.show', $teachingObject)}}">{{$teachingObject->title}}</a></td>
                       <td>{{$teachingObject->authorsNames()}}</td>
                       <td>
                         @if(in_array(Auth::user()->id,$teachingObject->authorsIds()))
                           <a href="{{route('teachingObject.edit', $teachingObject)}}"><i class="fas fa-edit"></i></a>
                           <form id="delete-teachingObject-{{$teachingObject->id}}" action="{{route('teachingObject.destroy', $teachingObject)}}" method="post">
                             {{ csrf_field() }}
                             <input name="_method" type="hidden" value="delete">
                             <a href="#" onclick="document.getElementById('delete-teachingObject-{{$teachingObject->id}}').submit()"><i class="fas fa-trash"></i></a>
                           </form>
                         @endif
                       </td>
                     </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
