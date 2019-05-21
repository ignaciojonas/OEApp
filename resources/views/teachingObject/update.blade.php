@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/teachingObjects.js') }}"></script>
@stop

@section('content')
@include('teachingObject.navbar')

<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">OBJETO DE ENSEÑANZA</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('teachingObject.update', $teachingObject) }}">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="put">
          <section id="tit">
              <div class="container">
                <label for="title" class="control-label"><p>Título</p></label>
                <input id="title" type="text" class="form-control" name="title" value="{{$teachingObject->title}}" >
              </div>
          </section>

          <section id="auth">
           <div class="container">
              <label for="authors" class="control-label"><p>Autores</p></label>
              <select multiple name="authors[]" id="authors" class="form-control">
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
          </section>

        <section id="temrece">
            <div class="container">
              <div class="col-md-6">
                <label for="theme" class="control-label"><p>Tema</p></label>
                <input id="theme" type="text" class="form-control" name="theme" value="{{$teachingObject->theme}}">
              </div>
              <div class="col-md-6">
                <label for="receiver" class="control-label"><p>Destinatarios</p></label>
                <input id="receiver" type="text" class="form-control" name="receiver" value="{{$teachingObject->receiver}}">
              </div>
            </div>
        </section>

        <section id="placedate">
          <div class="container">
            <div class="col-md-6">
              <label for="date" class="control-label"><p>Fecha</p></label>
              <input id="date" type="date" class="form-control" name="date" value="{{$teachingObject->date}}">
            </div>
            <div class="col-md-6">
              <label for="place" class="control-label"><p>Lugar</p></label>
              <input id="place" type="text" class="form-control" name="place" value="{{$teachingObject->place}}">
            </div>
          </div>
        </section>

        <section id="cont">
          <div class="container">
              <label for="content" class="control-label"><p>Contenido</p></label>
              <textarea id="content" name="content" value="">{{$teachingObject->content}}</textarea>
          </div>
        </section>

        <section id="obj">
          <div class="container">
              <label for="goal" class="control-label"><p>Objetivos</p></label>
              <textarea id="goal" name="goal" value=""> {{$teachingObject->goal}}</textarea>
          </div>
        </section>

        <section id="conocprev">
          <div class="container">
              <label for="previousKnowledge" class="control-label"><p>Conocimientos previos</p></label>
              <textarea id="previousKnowledge" name="previousKnowledge" value="" >{{$teachingObject->previousKnowledge}} </textarea>
          </div>
        </section>

        <section id="intdid">
          <div class="container">
              <label for="didacticIntentionality" class="control-label"><p>Intencionalidad Didáctica</p></label>
              <textarea id="didacticIntentionality" name="didacticIntentionality" value="" >{{$teachingObject->didacticIntentionality}} </textarea>
          </div>
        </section>

        <section id="descgral">
          <div class="container">
                <label for="generalDescription" class="control-label"><p>Descripción General</p></label>
                <textarea id="generalDescription" name="generalDescription" value="">{{$teachingObject->generalDescription}}</textarea>
          </div>
        </section>

        <section id="arense">
          <div class="container">
                <label for="teachingArea" class="control-label"><p>Área de enseñanza</p></label>
                <textarea id="teachingArea" name="teachingArea" value="">{{$teachingObject->teachingArea}}</textarea>
          </div>
        </section>

        <section id="reso">
          <div class="container">
              <label for="Resources" class="control-label"><p>Tipo de Recursos</p></label>
              <select multiple name="Resources[]" id="Resources">
                <option value=""></option>
                 @foreach ($resources as $resource)
                  <option value="{{$resource->id}}"
                    @if(in_array($resource->id, $Resources))
                      selected
                    @endif
                    >
                    {{$resource->name}}
                  </option>
                  @endforeach
                </select>
            </div>
          </section>

        <section id="marcador">
          <div class="container">
            <label for="Tags" class="control-label"><p>Tags</p></label> <small>-Etiqueta o palabra asociada a un OE-</small>
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#tagsModal">Agregar <i class="fas fa-plus-square"></i></button>
              <select multiple name="Tags[]" id="Tags">
                <option value=""></option>
                 @foreach ($tags as $tag)
                  <option value="{{$tag->id}}"
                    @if(in_array($tag->id, $Tags))
                      selected
                    @endif
                    >
                    {{$tag->name}}
                  </option>
                  @endforeach
                </select>
          </div>
        </section>

        <section id="mom">
          <div class="container">
            <label for="Moments" class="control-label"><p>Momentos</p></label>
            <select multiple name="Moments[]" id="Moments">
              <option value=""></option>
               @foreach ($moments as $moment)
                <option value="{{$moment->id}}"
                  @if(in_array($moment->id, $Moments))
                    selected
                  @endif
                  >
                  {{$moment->title}}
                </option>
                @endforeach
              </select>
          </div>
        </section>

        <section id="reflec">
          <div class="container">
                  <label for="reflection" class="control-label"><p>Reflexiones sobre las puestas en el aula</p></label>
                  <textarea id="reflection" name="reflection" value="">{{$teachingObject->reflection}}</textarea>
          </div>
        </section>

          <div class="container">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Actualizar
                  </button>
              </div>
          </div>
      </form>
    </div>
    @include('modals.tags')
</div>
@endsection
