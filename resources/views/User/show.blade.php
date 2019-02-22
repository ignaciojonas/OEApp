@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">Autor</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" >
              {{ csrf_field() }}
                <input name="_method" type="hidden" value="put">

                <div class="container">
                  <h4>Nombre</h4>
                  <p>{{$user->name}}</p>
                </div>

                <div class="container">
                  <h4>Email</h4>
                  <p>{{$user->email}}</p>
                </div>

                <div class="container">
                  <h4>Teaching Objects</h4>
                  <ul>
                  @foreach ($user->teachingObjects as $teachingObject)
                    <li><a href="{{route('teachingObject.show', $teachingObject)}}">{{$teachingObject->title}}</a></li>
                  @endforeach
                  </ul>
                </div>
            </form>
        </div>
</div>
@endsection
