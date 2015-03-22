@extends('layouts.default')

@section('content')
    <div class="login">
        <img src="img/Icon_white.svg" class="img-responsive" alt="Responsive image">
        <div class="col-xs-offset-1 col-xs-10 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
            {{ Form::open(['route' => 'login_path']) }}
                <!-- Email Form Input -->
                <div class = "form-group">
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Usuari']) }}
                </div>

                <!-- Password Form Input -->
                <div class = "form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contrasenya'] ) }}
                </div>

                <div class="col-xs-6 col-md-6" style="padding-left: 0">
                    <button type="button" class="register-button" disable>Registra't</button>
                </div>

                <div class="col-xs-6 col-md-6" style="padding-right: 0">
                    <button type="submit" class="enter-button">Entrar</button>
                </div>
                <div class="col-xs-12 col-md-12" style="padding: 0">
                    <hr>
                </div>
            {{ Form::close() }}
        </div>
        <div class="col-xs-12 col-md-12" style="padding: 0"><a href="" class="link">Has oblida't la contrassenya?</a></div>
    </div>
@endsection


