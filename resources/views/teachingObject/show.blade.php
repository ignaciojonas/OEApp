@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/teachingObjects.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">OBJETO DE ENSEÑANZA</div>
       <div class="panel-body">
          <form class="form-horizontal" method="POST">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="put">

            <section id="titaut">
              <div class="container">
                <div class="col-md-6">
                    <h4>Título del OE</h4>
                    <p>{!!$teachingObject->title!!}</p>
                </div>
                <div class="col-md-6">
                  <label for="authors" class="control-label"><h4>Autores</h4></label>
                    <select multiple name="authors[]" id="authors" class="form-control" >
                      <option value=""></option>
                       @foreach ($teachingObject->authors as $author)
                       <option value="{{$author->id}}">
                         {!!$author->name!!}
                       </option>
                       @endforeach
                    </select>
                </div>
              </div>
            </section>

            <section id="temrece">
              <div class="container">
                  <div class="col-md-6">
                      <h4>Tema</h4>
                      <p>{!!$teachingObject->theme!!}</p>
                  </div>
                  <div class="col-md-6">
                      <h4>Destinatarios</h4>
                      <p>{!!$teachingObject->receiver!!}</p>
                  </div>
              </div>
            </section>

            <section id="cont">
              <div class="container">
                      <h4>Contenido</h4>
                      <p>{!!$teachingObject->content!!} </p>
              </div>
            </section>

            <section id="placedate">
              <div class="container">
                  <div class="col-md-6">
                      <h4>Fecha</h4>
                      <p>{!!$teachingObject->date!!} </p>
                  </div>
                  <div class="col-md-6">
                      <h4>Lugar</h4>
                      <p>{!!$teachingObject->place!!} </p>
                  </div>
              </div>
            </section>

            <section id="obj">
              <div class="container">
                      <h4>Objetivos</h4>
                      <p>{!!$teachingObject->goal!!} </p>
              </div>
            </section>

            <section id="conocprev">
            <div class="container">
                    <h4>Conocimientos Previos</h4>
                    <p>{!!$teachingObject->previousKnowledge!!}</p>
            </div>
            </section>

            <section id="intdid">
            <div class="container">
                    <h4>Intencionalidad didáctica</h4>
                    <p>{!!$teachingObject->didacticIntentionality!!}</p>
            </div>
            </section>

            <section id="descgral">
            <div class="container">
                  <h4>Descripción General</h4>
                  <p>{!!$teachingObject->generalDescription!!}</p>
            </div>
            </section>

            <section id="arense">
            <div class="container">
                  <h4>Área de enseñanza</h4>
                  <p>{!!$teachingObject->teachingArea!!}</p>
            </div>
            </section>

            <div class="form-group">
              <h4>Tags</h4>
              <select multiple name="Tags[]" id="Tags" class="form-control">
                <option value=""></option>
                 @foreach ($teachingObject->tags as $tag)
                  <option value="{{$tag->id}}">
                    {!!$tag->name!!}
                  </option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <h4>Recursos</h4>
              <select multiple name="Resources[]" id="Resources" class="form-control">
                <option value=""></option>
                 @foreach ($teachingObject->resources as $resource)
                  <option value="{{$resource->id}}">
                    {!!$resource->name!!}
                  </option>
                  @endforeach
                </select>
            </div>

            <div class="form-group">
              <h4>Momentos</h4>
              <select multiple name="Moments[]" id="Moments" class="form-control">
                <option value=""></option>
                 @foreach ($teachingObject->moments as $moment)
                  <option value="{{$moment->id}}">
                    {!!$moment->title!!}
                  </option>
                  @endforeach
                </select>
            </div>

            <section id="reflec">
              <div class="container">
                      <h4>Reflexiones sobre las puestas en el aula</h4>
                      <p>{!!$teachingObject->reflection!!}</p>
              </div>
            </section>

          </form>
      </div>
  </div>

@endsection
