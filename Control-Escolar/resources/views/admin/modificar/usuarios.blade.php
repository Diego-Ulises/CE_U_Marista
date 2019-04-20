@extends('layouts.app_admin')

@section('stylesheet')
<link href="{{{ asset('css/style_dashboard.css') }}}" rel="stylesheet">
<link href="{{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css') }}}" rel="stylesheet">
@endsection

@section('title', 'Modificar Usuario')

@section('content')

<div class="section container">

    <div class="row">
        <form class="col  s12 m12" id="pb" action="" method="post">

            <div class="row card-panel">

              <div class="row">
                <div class="col m6 push-m3 s12" style="text-align: center;">
                  <h4>Modificar Usuarios</h4>
                </div>
              </div>

            <div class="input-field col m4 s12 ">
                    <input type="file" id="input-file-now" name="imagen" class="dropify"   >
                    <!--<i class="material-icons prefix">account_circle</i>-->

                </div>

                <div class="input-field col s12 m4">
                    <i class="material-icons prefix">
                        supervised_user_circle
                    </i>
                    <select class="validate" name="rol" id="rol" disabled>
                        <option value="" disabled >Seleccione</option>
                        <option value="Coordinador">Coordinador</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Alumno" selected>Alumno</option>
                    </select>
                    <label>Tipo de usuario</label>
                </div>

                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="nombres" id="nombre" class="validate" maxlength="35">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidop" name="apaterno" class="validate" maxlength="35">
                    <label for="apellidop">Apellido paterno</label>
                </div>
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" id="apellidom" name="amaterno" class="validate" maxlength="35">
                    <label for="apellidom">Apellido materno</label>
                </div>



                <div class="input-field col m4 s12 ">
                    <i class="material-icons prefix">email</i>
                    <input type="text" id="correo" class="validate" name="email" maxlength="150">
                    <label for="correo">Correo electrónico</label>
                </div>


                <!--  <div class="col m6 s12">-->



                <div class="input-field col s12 m4">
                    <i class="material-icons prefix">
                        wc
                    </i>
                    <select name="sexo" id="sexo">
                        <option value="" name="sexo" disabled selected>Sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>


                    </select>
                    <label>Sexo</label>
                </div>

                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">date_range</i>-->
                    <label for="fecha1">Fecha de nacimiento </label>
                    <input type="text" name="fnaci" class="datepicker" id="fecha1">
                </div>


                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="curp" id="curp" class="validate" maxlength="20">
                    <label for="curp">CURP</label>
                </div>


<!--Registrar contraseña-->
                <div class="input-field col m4 s12 ">
                    <!--<i class="material-icons prefix">account_circle</i>-->
                    <input type="text" name="pass" id="pass" class="validate" maxlength="20">
                    <label for="pass">Contraseña</label>
                </div>



                <div id="alumno_ext">


                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="ncontrol" id="ncontrol" class="validate" maxlength="12">
                        <label for="ncontrol">Número de control</label>
                    </div>
                    <!--fila-->

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="carrera" id="carrera" class="validate">
                        <label for="carrera">Carrera</label>-->
                        <select name="id_carrera" id="carrera_alumno">
                            <option value="" name="id_carrera" disabled selected>Carrera</option>

                        </select>
                    </div>

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="semestre" id="semestre" class="validate">
                        <label for="semestre">Semestre</label>-->
                        <select name="semestre" id="semestre">
                            <option value="" name="" disabled selected>Elija semestre</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>
Listar Planes de estudio !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                      -->
                        <input type="text" name="plan_de_estudios" id="plan_est" class="validate">
                        <label for="plan_est">Plan de estudios</label>
                    </div>
                </div>

                <div id="profe_ext">

                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="id_prof" id="clavep" class="validate" maxlength="30">
                        <label for="clavep">Clave de profesor</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="especialidad_profe" id="especialidad_profe" class="validate" maxlength="35">
                        <label for="especialidad_profe">Especialidad</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="cedulap" id="cedulap" class="cedula" maxlength="35">
                        <label for="cedulap">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nssocp" id="nsocp" class="validate" maxlength="25">
                        <label for="nsocp">Número de seguro socal</label>
                    </div>
                </div>

                <div id="coor_ext">
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="id_coordinador" id="clavec" class="validate" maxlength="25">
                        <label for="clavec">Clave de coordinador</label>
                    </div>
                    <!--fila-->
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <!--<input type="text" name="especialidad_coo" id="especialidad_coo" class="validate">
                        <label for="especialidad_coo">Carrera</label>-->
                        <select name="id_carrera_coordinador" id="carrera_coordinador">
                            <option value="" name="id_carrera_coordinador" disabled selected>Carrera</option>

                        </select>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="ced_fiscal" id="cedulac" class="cedula" maxlength="35">
                        <label for="cedulac">Cédula fiscal</label>
                    </div>
                    <div class="input-field col m4 s12 ">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nssoc" id="nsocc" class="validate" maxlength="25">
                        <label for="nsocc">Número de seguro socal</label>
                    </div>
                </div>

                <div class="row">
                </div>


                <div class="input-field col m3 s12">
                    <button class="btn light-blue darken-4" type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<!--sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{{ asset('js/validaciones.js') }}}"></script>
<script src="{{{ asset('js/modificar_usuario.js') }}}"></script>
<script src="{{{ asset('js/plugins/dropify/js/dropify.min.js') }}}"></script>

<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
    });
</script>

{{-- @if($registro)
<script type="text/javascript">
    swal('Modificación Exitosa!', 'Presione OK!', 'success');
</script>
@endif --}}


@endsection