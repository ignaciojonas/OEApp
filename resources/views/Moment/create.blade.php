@extends('layouts.app')
@section('pagespecificscripts')
  <script src="{{ asset('js/moments.js') }}"></script>
@stop
@section('content')

<div class="container p-3 mb-2 bg-secondary text-white">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MOMENTOS</div>

  <div class="container">
    <form class="form-horizontal" method="POST" action="{{ route('moment.store') }}">
      <div class="form-group">
        <label for="title" class="control-label"><p>Título del momento</p></label>
        <input id="title" type="text" class="form-control" name="title">
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="description" class="control-label"><p>Descripción breve</p></label>
          <input id="description" type="text" class="form-control" name="description">
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="procedure" class="control-label"><p>Consigna</p></label>
          <input id="procedure" type="text" class="form-control" name="procedure">
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="developmentForecast" class="control-label"><p>Previsiones del desarrollo</p></label>
          <textarea id="developmentForecast" name="developmentForecast" rows="5" class="form-control"> </textarea>
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="registrationTeacher" class="control-label"><p>Registro entre docentes</p></label>
          <textarea id="registrationTeacher" name="registrationTeacher" rows="5" class="form-control"> </textarea>
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="resourcesStudent" class="control-label"><p>Recursos para el alumno</p></label>
          <textarea id="resourcesStudent" name="resourcesStudent" rows="5" class="form-control"> </textarea>
      </div>
    </form>
  </div>

  <div class="container">
    <form class="form-horizontal" action="">
      <div class="form-group">
          <label for="classroomRecord" class=" control-label"><p>Registros del aula</p></label>
          <textarea id="classroomRecord" name="classroomRecord" rows="5" class="form-control"> </textarea>
      </div>
    </form>
  </div>

 <div class="form-group">
      <div class="col-md-8 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
              Grabar
          </button>
      </div>
  </div>

</div>
@endsection
