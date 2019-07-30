@extends('layouts.app')

@section('content')
<div class="container">
  <div class="p-5 mb-2 h2 bg-dark text-white font-weight-bold">Autor</div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('user.store') }}">
            {{ csrf_field() }}
            <div class="container">
                <label for="name" class="col-md-2 control-label"><p>Nombre</p></label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name">
                </div>
            </div>

            <div class="container">
                <label for="email" class="col-md-2 control-label"><p>Email</p></label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email">
                </div>
            </div>

            <div class="container">
                <label for="password" class="col-md-2 control-label"><p>Password</p></label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">
                </div>
            </div>

           <div class="container">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Grabar
                    </button>
                </div>
          </div>
        </form>
      </div>
</div>
@endsection
