@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/teachingObjects.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">OBJETO DE ENSEÑANZA</div>
       <div class="panel-body">
          <form class="form-horizontal" method="POST">
              <input name="_method" type="hidden" value="put">

            <section id="titaut">
              <div class="container">
                <div class="col-md-6">
                    <h3>Título del OE</h3>
                    <p>{{$teachingObject->title}}</p>
                </div>
                <div class="col-md-6">
                  <label for="authors" class="control-label"><h3>Autores</h3></label>
                    <select multiple name="authors[]" id="authors" class="form-control" >
                      <option value=""></option>
                       @foreach ($teachingObject->authors as $author)
                       <option value="{{$author->id}}">
                         {{$author->name}}
                       </option>
                       @endforeach
                    </select>
                </div>
              </div>
            </section>

            <section id="temrece">
              <div class="container">
                  <div class="col-md-6">
                      <h3>Tema</h3>
                      <p>{{$teachingObject->theme}}</p>
                  </div>
                  <div class="col-md-6">
                      <h3>Destinatarios</h3>
                      <p>{{$teachingObject->receiver}}</p>
                  </div>
              </div>
            </section>

            <section id="cont">
              <div class="container">
                      <h3>Contenido</h3>
                      <p>{{$teachingObject->content}} </p> <!--cómo se pueden poner los formatos-->

                      <text-angular ng-model="htmlVariable">{{$teachingObject->content}}</text-angular>
            </section>

            <section id="placedate">
              <div class="container">
                  <div class="col-md-6">
                      <h3>Fecha</h3>
                      <p>{{$teachingObject->date}} </p>
                  </div>
                  <div class="col-md-6">
                      <h3>Lugar</h3>
                      <p>{{$teachingObject->place}} </p>
                  </div>
              </div>
            </section>

            <section id="obj">
              <div class="container">
                      <h3>Objetivos</h3>
                      <p>{{$teachingObject->goal}} </p>
              </div>
            </section>

            <section id="conocprev">
            <div class="container">
                    <h3>Conocimientos Previos</h3>
                    <p>{{$teachingObject->previousKnowledge}}</p>
            </div>
            </section>

            <section id="intdid">
            <div class="container">
                    <h3>Intencionalidad didáctica</h3>
                    <p>{{$teachingObject->didacticIntentionality}}</p>
            </div>
            </section>

            <section id="descgral">
            <div class="container">
                  <h3>Descripción General</h3>
                  <p>{{$teachingObject->generalDescription}}</p>
            </div>
            </section>

            <section id="arense">
            <div class="container">
                  <h3>Área de enseñanza</h3>
                  <p>{{$teachingObject->teachingArea}}</p>
            </div>
            </section>

            <div class="form-group">
              <h3>Tags</h3>
              <select multiple name="Tags[]" id="Tags">
                <option value=""></option>
                 @foreach ($teachingObject->tags as $tag)
                  <option value="{{$tag->id}}">
                    {{$tag->name}}
                  </option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <h3>Recursos</h3>
              <select multiple name="Resources[]" id="Resources">
                <option value=""></option>
                 @foreach ($teachingObject->resources as $resource)
                  <option value="{{$resource->id}}">
                    {{$resource->name}}
                  </option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <h3>Actividades</h3>
              <select multiple name="Moments[]" id="Moments">
                <option value=""></option>
                 @foreach ($teachingObject->moments as $moment)
                  <option value="{{$moment->id}}">
                    {{$moment->procedure}}
                  </option>
                  @endforeach
                </select>
            </div>

            <section id="reflec">
              <div class="container">
                      <h3>Reflexiones sobre las puestas en el aula</h3>
                      <p>{{$teachingObject->reflection}}</p>
              </div>
            </section>

          </form>
      </div>
  </div>

@endsection
