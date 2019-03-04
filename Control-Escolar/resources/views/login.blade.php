@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_login.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
  <div class="background">
    <div class="color-bg">
      <div class="row">
        <div class="col s8 push-s2">
          <p class="bienvenida">Bienvenido al Sistema de Control Escolar de la Universidad Marista</p>
        </div>
      </div>
      <div class="row">
        <div class="col s4 push-s4 pull-s4 l4">
          <div class="logo">
            <img class="img-logo" src="{{{ asset('img/logo/lm_b.png') }}}" alt="">
          </div>
        </div>
        <div class="col s12 m12 l7 container section">
          <div class="card-panel">
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6"><a class="active" href="#alumno">Alumno</a></li>
                  <li class="tab col s6"><a href="#personal">Personal</a></li>
                </ul>
              </div>
              <div id="alumno" class="col s12">
                <form class="" action="#" method="post">
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="username" type="text" class="validate">
                      <label for="username"><i class="fas fa-user" style="margin-right:0.5em;"></i>Numero de Control</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="password" type="password" class="validate">
                      <label for="password"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s2 push-s5 pull-s5 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit" name="action">Acceder</button>
                  </div>
                </form>
              </div>
              <div id="personal" class="col s12">
                <form class="" action="#" method="post">
                  <div class="row">
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="username" type="text" class="validate">
                      <label for="username"><i class="fas fa-user" style="margin-right:0.5em;"></i>Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s12 l8 push-l2 pull-l2   ">
                      <input id="password" type="password" class="validate">
                      <label for="password"><i class="fas fa-key" style="margin-right:0.5em;"></i>Contraseña</label>
                    </div>
                      <button class="btn col s2 push-s5 pull-s5 l8 push-l2 pull-l2 waves-effect waves-light login" type="submit" name="action">Acceder</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="contenedor">
        <p class="footer">Todos los derechos reservados © 2019.</p>
      </div>
      <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Acceso</span>
              <p>inicio</p>
            </div>
            <div class="card-action">
              <div class="row">
                <form method="post" action="{{ route('login') }}" class="col s12">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="{{ $errors->has('name') ? 'input-field col s6 red lighten-1' : 'input-field col s6' }}">
                      <input id="name" type="text" name="name" values="{{ old('name') }}" class="validate">
                      <label for="name">Usuario</label>
                      {!! $errors ->first('name','<span class="help">:message</span> ') !!}
                    </div>
                    <div class=" {{ $errors->has('password') ? 'input-field col s6 red lighten-1' : 'input-field col s6' }}">
                      <input id="password" type="password" name="password" class="validate">
                      <label for="password">Contraseña</label>
                      {!! $errors ->first('password','<span class="help">:message</span> ') !!}
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                </form>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
