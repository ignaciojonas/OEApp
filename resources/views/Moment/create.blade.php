@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Moments</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('moment.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="procedure" class="col-md-4 control-label">Consigna</label>
                            <div class="col-md-6">
                                <input id="procedure" type="text" class="form-control" name="procedure" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="suggestions" class="col-md-4 control-label">Sugerencias</label>
                            <div class="col-md-6">
                                <textarea id="suggestions" name="suggestions" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="achievementExpectation" class="col-md-4 control-label">Expectativas de logro</label>
                            <div class="col-md-6">
                                <textarea id="achievementExpectation" name="achievementExpectation" rows="5" cols="20"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="implementationResult" class="col-md-4 control-label">Implementación y Resultados</label>
                            <div class="col-md-6">
                                <textarea id="implementationResult" name="implementationResult" rows="5" cols="20"> </textarea>
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
