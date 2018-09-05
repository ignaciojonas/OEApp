@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/teachingObjects.js') }}"></script>
@stop
<!--@section('title','home')-->
@section('content')

<!--contenedor de todo el formulario-->
<div class="container p-3 mb-2 bg-secondary text-white">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">OBJETO DE ENSEÑANZA</div>

    <!-- secciones del OE -->
  <section id="tit">
    <!--Título-->
    <div class="container">
      <form class="form-horizontal" action="">
        <div class="form-group">
          <label for="title" class="control-label"><p>Título del OE</p></label>
          <input id="title" type="text" class="form-control" name="title">
        </div>
      </form>
    </div>
  </section>

  <!--Autores-->
<section id="auth">
 <div class="container">
  <form  class="form-horizontal" action="">
  <div class="form-group" >
    <label for="authors" class="control-label"><p>Autores</p></label>
      <select multiple name="authors[]" id="authors" class="form-control">
        <option value=""></option>
         @foreach ($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
  </div>
</form>
</div>
</section>

    <!--Tema y destinatarios-->
    <section id="temrece">
      <div class="container">
        <form action="" class="form-row">
          <div class="form-group col-md-6">
              <label for="theme" class="control-label"><p>Tema</p></label>
              <input type="text" id="theme" class="form-control" name="theme">
          </div>
          <div class="form-group col-md-6">
              <label for="receiver" class="control-label"><p>Destinatarios</p></label>
              <input id="receiver" type="text" class="form-control" name="receiver">
          </div>
        </form>
      </div>
    </section>


    <!--Contenidos-->
  <section id="cont">
    <div class="container">
      <form action="" class="form-horizontal">
        <div class="form-group">
            <label for="content" class="control-label"><p>Contenido</p></label>
            <textarea id="content" name="content" class="form-control" rows="5" ></textarea>
        </div>
      </form>
    </div>
  </section>

    <!--Lugar y Fecha-->
  <section id="placedate">
    <div class="container">
      <form action="" class="form-row">
        <div class="form-group col-md-6">
            <label for="date" class="control-label"><p>Fecha</p></label>
            <input type="date" id="date" class="form-control" name="date">
        </div>
        <div class="form-group col-md-6">
            <label for="place" class="control-label"><p>Lugar</p></label>
            <input id="place" type="text" class="form-control" name="place">
        </div>
      </form>
    </div>
  </section>

    <!--Objetivos-->
  <section id="obj">
    <div class="container">
      <form action="" class="form-horizontal">
        <div class="form-group">
            <label for="goal" class="control-label"><p>Objetivos</p></label>
            <textarea id="goal" name="goal" class="form-control" rows="5" ></textarea>
        </div>
      </form>
    </div>
  </section>

  <!--Conocimientos previos-->
  <section id="conocprev">
  <div class="container">
    <form action="" class="form-horizontal">
      <div class="form-group">
          <label for="previousKnowledge" class="control-label"><p>Conocimientos Previos</p></label>
          <textarea id="previousKnowledge" name="previousKnowledge" class="form-control" rows="5" ></textarea>
      </div>
    </form>
  </div>
  </section>

  <!--Intencionalidad didáctica-->
    <section id="intdid">
    <div class="container">
      <form action="" class="form-horizontal">
        <div class="form-group">
            <label for="didacticIntentionality" class="control-label"><p>Intencionalidad didáctica</p></label>
            <textarea id="didacticIntentionality" name="didacticIntentionality" class="form-control" rows="5" ></textarea>
        </div>
      </form>
    </div>
  </section>

<!--Descripción general-->
<section id="descgral">
<div class="container">
<form action="" class="form-horizontal">
  <div class="form-group">
      <label for="generalDescription" class="control-label"><p>Descripción General</p></label>
      <textarea id="generalDescription" name="generalDescription" class="form-control" rows="5" ></textarea>
  </div>
</form>
</div>
</section>

<!--área de Enseñanza-->
<section id="arense">
<div class="container">
<form action="" class="form-horizontal">
  <div class="form-group">
      <label for="teachingArea" class="control-label"><p>Área de enseñanza</p></label>
      <textarea id="teachingArea" name="teachingArea" class="form-control" rows="5" ></textarea>
  </div>
</form>
</div>
</section>

<section id="reso">
<div class="container">
  <form action="" class="form-horizontal">
  <div class="form-group">
    <label for="Resources" class="control-label"> <p>Tipo de Recursos</p></label>
    <select multiple name="Resources[]" id="Resources" class="form-control">
      <option value=""></option>
       @foreach ($resources as $resource)
        <option value="{{$resource->id}}">
          {{$resource->name}}
        </option>
        @endforeach
      </select>
  </div>
</form>
</div>
</section>

<section id="marcador">
<div class="container">
  <form action="" class="form-horizontal">
  <div class="form-group">
    <label for="Tags" class="control-label"><p> Tags</p></label>
      <select multiple name="Tags[]" id="Tags" class="form-control">
        <option value=""></option>
         @foreach ($tags as $tag)
          <option value="{{$tag->id}}">
            {{$tag->name}}
          </option>
          @endforeach
        </select>
  </div>
  </form>
</div>
</section>

<section id="momentos">
<div class="container">
  <form action="" class="form-horizontal">
  <div class="form-group">
    <label for="Moments" class="control-label"><p>Momentos</p></label>
      <select multiple name="Moments[]" id="Moments" class="form-control">
        <option value=""></option>
         @foreach ($moments as $moment)
          <option value="{{$moment->id}}">
            {{$moment->procedure}}
          </option>
          @endforeach
        </select>
    </div>
  </form>
</div>
</section>

<!--Reflexiones sobre las puestas en el aula-->
<section id="reflec">
  <div class="container">
    <form action="" class="form-horizontal">
      <div class="form-group">
          <label for="reflection" class="control-label"><p>Reflexiones sobre las puestas en el aula</p></label>
          <textarea id="reflection" name="reflection" class="form-control" rows="5" ></textarea>
      </div>
    </form>
  </div>
</section>

<div class="container">
  <form action="" class="form-horizontal">
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
@endsection
