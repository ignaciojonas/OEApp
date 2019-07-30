@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">MOMENTO</div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" >
                <input name="_method" type="hidden" value="put">

                    <section id=tit>
                      <div class="container">
                          <h3>Título del momento</h3>
                          <p>{!!$moment->title!!}</p>
                      </div>
                    </section>

                    <section id="teachingObjects">
                        <div class="container">
                          <label for="title" class="control-label"><p>Objetos de Enseñanza a los que pertenece</p></label>
                          <ul>
                          @foreach ($moment->teachingObjects() as $teachingObject)
                            <li>
                              <a href="/teachingObject/{{$teachingObject->id}}" >{{$teachingObject->title}}</a>
                            </li>
                          @endforeach
                        </ul>
                        </div>
                    </section>

                    <section id=desc>
                      <div class="container">
                          <h3>Descripción breve</h3>
                          <p>{!!$moment->briefDescription!!}</p>
                      </div>
                    </section>

                    <section id=proc>
                      <div class="container">
                          <h3>Consigna para el alumno</h3>
                          <p>{!!$moment->procedure!!}</p>
                      </div>
                    </section>

                    <section id=prev>
                      <div class="container">
                          <h3>Previsiones acerca del desarrollo del momento en el aula</h3>
                          <p>{!!$moment->forecastDevelopment!!}</p>
                      </div>
                    </section>

                    <section id=regdoc>
                      <div class="container">
                          <h3>Registros del trabajo entre docentes</h3>
                          <p>{!!$moment->teachersRecord()->record!!}</p>
                          @if($moment->teachersRecordFiles() !== null)
                            <h4>Archivos Adjuntos</h4>
                            <ul>
                              @foreach ($moment->teachersRecordFiles() as $fileRecord)
                                <li>
                                  <a href="{{asset('storage/'.$fileRecord->file->path)}}" download="{{$fileRecord->file->name}}">{{$fileRecord->file->name}}</a>
                                </li>
                              @endforeach
                            </ul>
                          @endif
                      </div>
                    </section>

                    <section id=resostu>
                      <div class="container">
                          <h3>Recursos para el alumno</h3>
                          <p>{!!$moment->resourceStudents!!}</p>
                      </div>
                    </section>

                    <section id=clarec>
                      <div class="container">
                          <h3>Registros del aula</h3>
                          <p>{!!$moment->classroomRecord()->record!!}</p>
                          @if($moment->classroomRecordFiles() !== null)
                            <h4>Archivos Adjuntos</h4>
                            <ul>
                              @foreach ($moment->classroomRecordFiles() as $fileRecord)
                                <li>
                                  <a href="{{asset('storage/'.$fileRecord->file->path)}}" download="{{$fileRecord->file->name}}">{{$fileRecord->file->name}}</a>
                                </li>
                              @endforeach
                            </ul>
                          @endif
                      </div>
                    </section>

              </form>
      </div>
</div>
@endsection
