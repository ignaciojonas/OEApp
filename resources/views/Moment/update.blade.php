@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/moments.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MOMENTOS</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('moment.update', $moment) }}">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="put">

          <section id="tit">
              <div class="container">
                <label for="title" class="control-label"><p>Título del momento</p></label>
                <input id="title" type="text" class="form-control" name="title" value="{{$moment->title}}" >
              </div>
          </section>

          <section id="desc">
              <div class="container">
                <label for="briefDescription" class="control-label"><p>Descripción breve</p></label>
                <textarea id="briefDescription" name="briefDescription" value="">{{$moment->briefDescription}}</textarea>
              </div>
          </section>

          <section id="proc">
             <div class="container">
                <label for="procedure" class="control-label"><p>Consigna para el alumno</p></label>
                <textarea id="procedure" name="procedure" value="">{{$moment->procedure}}</textarea>
            </div>
          </section>

          <section id="prev">
              <div class="container">
                <label for="forecastDevelopment" class="control-label"><p>Previsiones acerca del desarrollo del momento en el aula</p></label>
                <textarea id="forecastDevelopment" name="forecastDevelopment" value="">{{$moment->forecastDevelopment}}</textarea>
              </div>
          </section>

          <section id="regdoc">
              <div class="container">
                  <label for="recordsTeachers" class="control-label"><p>Registros del trabajo entre docentes</p></label>
                  <textarea id="recordsTeachers" name="recordsTeachers" value="">{{$moment->recordsTeachers}}</textarea>
              </div>
          </section>

          <section id="resostu">
              <div class="container">
                  <label for="resourceStudents" class="control-label"><p>Recursos para el alumno</p></label>
                  <textarea id="resourceStudents" name="resourceStudents" value="">{{$moment->resourceStudents}}</textarea>
              </div>
          </section>

          <section id="clarec">
              <div class="container">
                  <label for="classroomRecords" class="control-label"><p>Registros del aula</p></label>
                  <textarea id="classroomRecords" name="classroomRecords" value="">{{$moment->classroomRecords}}</textarea>
              </div>
          </section>

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
@endsection
