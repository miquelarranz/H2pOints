@extends('layouts.default')

@section('content')
    <div class="text-center col-sm-6 col-sm-offset-3">
        <h1 class="white text-center">Perfil</h1>
        <img class="profile-img img-rounded" src="img/Icon_white.svg" alt="Profile image">
        <table class="white profile-table text-left">
            <tr>
                <td>Email</td>
                <td>example@example.com</td>
            </tr>
            <tr>
                <td>Nom complert</td>
                <td>Nom Cognom</td>
            </tr>
            <tr>
                <td>DNI</td>
                <td>00000000X</td>
            </tr>
            <tr>
                <td>Contrasenya</td>
                <td>********</td>
            </tr>
            <tr>
                <td>Punts actuals</td>
                <td>7600</td>
            </tr>
            <tr>
                <td>Punts totals</td>
                <td>15250</td>
            </tr>
        </table>
        <div class="col-xs-4 col-xs-offset-4" style="padding-right: 0">
            <a class="guardar-profile-button btn">Guardar</a>
        </div>
    </div>
@endsection


