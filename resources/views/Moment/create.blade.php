@extends('layouts.app')
@section('pagespecificscripts')
  <script src="{{ asset('js/moments.js') }}"></script>
@stop

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MOMENTOS</div>
       <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('moment.store') }}">
            {{ csrf_field() }}

           <section id="tit">
              <div class="container">
                    <label for="title" class="control-label"><p>Título del Momento</p></label>
                    <input id="title" type="text" class="form-control" name="title">
              </div>
            </section>

           <section id="desc">
              <div class="container">
                  <label for="briefDescription" class="control-label"><p>Descripción Breve</p></label>
                  <textarea id="briefDescription" class="form-control" name="briefDescription" rows="5"></textarea>
              </div>
            </section>

            <section id="proc">
              <div class="container">
                  <label for="procedure" class="control-label"><p>Consigna para el alumno</p></label>
                  <textarea id="procedure" class="form-control" name="procedure" rows="5"></textarea>
              </div>
            </section>

            <section id="prev">
              <div class="container">
                  <label for="forecastDevelopment" class="control-label"><p>Previsiones acerca del desarrollo del momento en el aula</p></label>
                  <textarea id="forecastDevelopment" name="forecastDevelopment" class="form-control" rows="5"></textarea>
                </div>
            </section>

            <section id="regdoc">
                <div class="container">
                    <label for="teachersRecord" class="control-label"><p>Registros del trabajo entre docentes</p></label>
                    <textarea id="teachersRecord" name="teachersRecord" class="form-control" rows="5"></textarea>
                </div>
            </section>

            <section id="resostu">
                <div class="container">
                    <label for="resourceStudents" class="control-label"><p>Recursos para el alumno</p></label>
                    <textarea id="resourceStudents" name="resourceStudents" class="form-control" rows="5"></textarea>
                </div>
            </section>

            <section id="clarec">
                <div class="container">
                    <label for="classroomRecord" class="control-label"><p>Registros del aula</p></label>
                    <textarea id="classroomRecord" name="classroomRecord" class="form-control" rows="5"></textarea>
                </div>
            </section>

            <div class="container">
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
