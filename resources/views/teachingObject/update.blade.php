@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Objeto de Enseñanza</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('teachingObject.update', $teachingObject) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="put">

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Título</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$teachingObject->title}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="authors" class="col-md-4 control-label">Autores</label>
                          <select multiple name="authors[]" id="authors">
                            <option value=""></option>
                             @foreach ($users as $user)
                              <option value="{{$user->id}}"
                                @if(in_array($user->id, $authors))
                                  selected
                                @endif
                                >
                                {{$user->name}}
                              </option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="theme" class="col-md-4 control-label">Tema</label>

                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control" name="theme" value="{{$teachingObject->theme}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <textarea id="content" name="content" value="{{$teachingObject->content}}" > </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="goal" class="col-md-4 control-label">Objetivo</label>

                            <div class="col-md-6">
                                <textarea id="goal" name="goal" value="{{$teachingObject->goal}}" > </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="approach" class="col-md-4 control-label">Enfoque</label>

                            <div class="col-md-6">
                                <textarea id="approach" name="approach" value="{{$teachingObject->approach}}" > </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="recipients" class="col-md-4 control-label">Destinatarios</label>

                            <div class="col-md-6">
                                <input id="recipients" type="text" class="form-control" name="recipients" value="{{$teachingObject->recipients}}" required readonly autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{$teachingObject->date}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="place" class="col-md-4 control-label">Lugar</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{$teachingObject->place}}" required readonly autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
