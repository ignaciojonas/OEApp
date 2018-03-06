@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accesos</div>

                <div class="panel-body">
                    <a href="/teachingObject">Objetos de Enseñanza</a>
                </div>

                <div class="panel-body">
                    <a href="/tag">Tags</a>
                </div>

                <div class="panel-body">
                    <a href="/resource">Recursos</a>
                </div>
                
                <div class="panel-body">
                    <a href="/activity">Actividades</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
