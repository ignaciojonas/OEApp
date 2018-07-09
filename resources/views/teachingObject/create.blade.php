@extends('layouts.app')

@section('pagespecificscripts')
  <script src="{{ asset('js/teachingObjects.js') }}"></script>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Objeto de Enseñanza</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('teachingObject.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Título</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="authors" class="col-md-4 control-label">Autores</label>
                          <div class="col-md-6">
                            <select multiple name="authors[]" id="authors">
                              <option value=""></option>
                               @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="theme" class="col-md-4 control-label">Tema</label>
                            <div class="col-md-6">
                                <input id="theme" type="text" class="form-control" name="theme">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Contenidos</label>
                            <div class="col-md-6">
                                <textarea id="content" name="content" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="goal" class="col-md-4 control-label">Objetivos</label>
                            <div class="col-md-6">
                                <textarea id="goal" name="goal" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="previousKnowledge" class="col-md-4 control-label">Conocimientos previos</label>
                            <div class="col-md-6">
                                <textarea id="previousKnowledge" name="previousKnowledge" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="didacticIntentionality" class="col-md-4 control-label">Intencionalidad didáctica</label>
                            <div class="col-md-6">
                                <textarea id="didacticIntentionality" name="didacticIntentionality" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                       <div class="form-group">
                             <label for="receiver" class="col-md-4 control-label">Destinatarios</label>
                             <div class="col-md-6">
                               <h5>Nivel educativo</h5>
                               <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="nivel1" name="customRadioInline1" class="custom-control-input">
                                 <label class="custom-control-label" for="nivel1">Primario</label>
                               </div>
                               <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="nivel2" name="customRadioInline1" class="custom-control-input">
                                 <label class="custom-control-label" for="nivel2">Secundario</label>
                               </div>
                               <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="nivel3" name="customRadioInline1" class="custom-control-input">
                                 <label class="custom-control-label" for="nivel3">Terciario</label>
                               </div>
                             </div>
                             <div class="form-group">
                                 <label for="year" class="col-md-4 control-label">Año escolar</label>
                                 <div class="col-md-6">
                                     <input type="year" id="year" class="form-control" name="year">
                                 </div>
                             </div>
                       </div>

                        <div class="form-group">
                            <label for="date" class="col-md-4 control-label">Fecha</label>
                            <div class="col-md-6">
                                <input type="date" id="date" class="form-control" name="date">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="place" class="col-md-4 control-label">Lugar</label>
                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="generalDescription" class="col-md-4 control-label">Descripción general</label>
                            <div class="col-md-6">
                                <textarea id="generalDescription" name="generalDescription" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="teachingArea" class="col-md-4 control-label">Área de enseñanza</label>
                            <div class="col-md-6">
                                <textarea id="teachingArea" name="teachingArea" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="Tags" class="col-md-4 control-label">Tags</label>
                          <div class="col-md-6">
                            <select multiple name="Tags[]" id="Tags">
                              <option value=""></option>
                               @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">
                                  {{$tag->name}}
                                </option>
                                @endforeach
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="Resources" class="col-md-4 control-label"> Tipo de Recursos</label>
                          <div class="col-md-6">
                            <select multiple name="Resources[]" id="Resources">
                              <option value=""></option>
                               @foreach ($resources as $resource)
                                <option value="{{$resource->id}}">
                                  {{$resource->name}}
                                </option>
                                @endforeach
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="Moments" class="col-md-4 control-label">Momentos</label>
                          <div class="col-md-6">
                            <select multiple name="Moments[]" id="Moments">
                              <option value=""></option>
                               @foreach ($moments as $moment)
                                <option value="{{$moment->id}}">
                                  {{$moment->procedure}}
                                </option>
                                @endforeach
                              </select>
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
