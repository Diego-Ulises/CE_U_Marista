@extends('layouts.app')

@section('stylesheet')
  <link href="{{{ asset('css/style_admin.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Inicio de Sesion')

@section('content')
<div class="background">

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><img class="img-logo" src="{{{ asset('img/logo/lm_b_s.png') }}}" alt=""></a>

      </div>
    </nav>


    <div class="section container">
      <div class="row">
        <form class="col  s12 m12" action="{{ route('registroPersona') }}" method="post">
          {{ csrf_field() }}

          <div class="row card-panel">

            <div class="input-field col s12 m3">
              <i class="material-icons prefix">
                supervised_user_circle
              </i>
              <select name="rol" required>
                <option value=""  disabled selected>Seleccione</option>
                <option  value="Coordinador" >Coordinador</option>
                <option  value="Profesor">Profesor</option>
                <option  value="Alummno">Alumno</option>
              </select>
              <label>Tipo de usuario</label>
            </div>

            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" name="nombres" id="nombre" class="validate" required>
              <label for="nombre">Nombre:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="apellidop" name="apaterno" class="validate" required>
              <label for="apellidop">Apellido paterno:</label>
            </div>
            <div class="input-field col m3 s12 ">
              <!--<i class="material-icons prefix">account_circle</i>-->
              <input type="text" id="apellidom" name="amaterno" class="validate" required>
              <label for="apellidom">Apellido materno:</label>
            </div>



            <div class="input-field col m4 s12 ">
              <i class="material-icons prefix">email</i>
              <input type="text" id="correo" class="validate" name="email" required>
              <label for="correo">Correo electrónico:</label>
            </div>


        <!--  <div class="col m6 s12">-->



              <div class="input-field col s12 m4">
                <i class="material-icons prefix">
                  wc
                </i>
                <select name="sexo" required>
                  <option value="" name="sexo" disabled selected>Sexo</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>


                </select>
                <label>Tipo de usuario</label>
              </div>


          <div class="input-field col m4 s12 ">
            <!--<i class="material-icons prefix">date_range</i>-->
            <label for="fecha">Fecha de nacimiento: </label>
              <input type="text" name="fnaci" class="datepicker validate" required id="fecha" >
          </div>

          <div class="row">
          </div>



          <div class="input-field col m3 s12 ">
            <input type="text" id="calle" name="calle" class="validate" required>
            <label for="calle">Calle:</label>
          </div>
          <div class="input-field col m3 s12 ">
            <input type="number" id="num_ext" name="num_ext" class="validate" required>
            <label for="num_ext">Número exterior:</label>
          </div>
          <div class="input-field col m3 s12 ">
            <input type="number" id="num_int" name="num_int" class="validate" required>
            <label for="num_int">Número interior:</label>
          </div>
          <div class="input-field col m3 s12 ">
            <input type="text" id="colonia" class="validate" name="colonia" required>
            <label for="colonia">Colonia:</label>
          </div>


          <div class="input-field col m4 s12 ">
            <input type="number" id="cp" class="validate" name="codigo_postal" required>
            <label for="cp">Código postal:</label>
          </div>
          <div class="input-field col m4 s12 ">
            <input type="text" id="ciudad" name="ciudad" class="validate" required>
            <label for="ciudad">Ciudad:</label>
          </div>
          <div class="input-field col m4 s12 ">
            <input type="text" id="estado" name="estado" class="validate" required>
            <label for="estado">Estado:</label>
          </div>

          <div class="input-field col m4 s12 ">
            <input type="tel" id="telefono" name="num_tel" class="validate" required>
            <label for="telefono">Número de teléfono:</label>
          </div>
          <div class="input-field col m4 s12 ">
            <input type="tel" id="celular" name="num_cel" class="validate" required>
            <label for="celular">Número de celular:</label>
          </div>
          <div class="input-field col m4 s12 ">
            <input type="password" id="pass" name="pass" class="validate" required>
            <label for="pass">Contraseña:</label>
          </div>
        <div class="input-field col m6 s6 ">
          <button class="btn red darken-1 waves-effect waves-light" type="submit" name="action">Cancelar
            <i class="material-icons right">clear</i>
          </button>
        </div>
        <div class="input-field col m6 s6 push-m3">
          <button class="btn light-blue darken-4 waves-effect waves-light" type="submit" name="action">Registrar
            <i class="material-icons right">send</i>
          </button>
        </div>

        </form>
      </div>
    </div>

  </div>

@endsection
@section('scripts')
<script src="{{{ asset('js/validaciones.js') }}}">

</script>
<script type="text/javascript">
var name = document.getElementById("nombre");

name.addEventListener("keyup", function (event) {
  if (name.validity.typeMismatch) {
    name.setCustomValidity("¡Yo esperaba una dirección de correo, cariño!");
  } else {
    name.setCustomValidity("");
  }
});
</script>
@endsection