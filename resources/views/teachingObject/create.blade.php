@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Objeto de Enseñanza</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('teachingObject.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Titulo</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="title" class="col-md-4 control-label">Autores</label>
                          <select multiple name="authors[]" id="authors">
                            <option value=""></option>
                             @foreach ($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="theme" class="col-md-4 control-label">Tema</label>

                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control" name="theme" required autofocus>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <textarea name="content" rows="5" cols="20" required autofocus> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Grabar
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
