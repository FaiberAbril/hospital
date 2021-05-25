@extends('adminlte::page')

@section('title', 'Manatenimiento')

@section('content_header')
<h1>Realizar Mantenimiento</h1>
@stop

@section('content')


<div class="container">
    <div class="row ">
        <div class="col-12">
            <div class="col-12">
                <img src="{{asset('img/logoempresa.jpeg')}}" class="product-image" alt="Product Image"
                    style="max-width: 400px; margin-left: 30%;">
            </div>
        </div>
        <div class="col-12 text-center">
            <h5>NIT. 900483816-1</h5>
            <h5>GLOBAL INGENIERIA SUMINISTROS Y TECNOLOGIA BIOMEDICA SAS</h5>
            <h5>CALLE 23A # 10A - 43 MALAGA SANTANDER</h5>
            <hr>

        </div>
    </div>

</div>

<form action="/Mantenimiento" method="POST">
    @csrf


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tipo de Mantenimiento</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="TipoMantenimiento" name="TipoMantenimiento">
                    <option value="Preventivo">Preventivo</option>
                    <option value="Instalación">Instalación</option>
                    <option value="Evaluación Tecnica">Evaluación Tecnica</option>
                    <option value="Garantia">Garantia</option>
                    <option value="Correctiva">Correctiva</option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->
    </div>


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Fecha del Mantenimiento</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Mantenimiento</label>
                <div class="col-sm-8">
                    <input type="date" required class="form-control" id="FechaMantenimiento" name="FechaMantenimiento">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Datos del Equipo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">

                <div class="row ">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset($equipo->imagen)}}" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h4>Area : <small>{{$equipo->area}}</small></h4>
                        <h4>Nombre : <small>{{$equipo->nombre}}</small></h4>
                        <h4>Serie : <small>{{$equipo->serie}}</small></h4>
                        <h4>Marca : <small>{{$equipo->marca}}</small></h4>
                        <h4>Voltaje : <small>{{$equipo->voltaje}}</small></h4>
                        <h4>Modelo : <small>{{$equipo->modelo}}</small></h4>
                        <h4>Frecuencia : <small>{{$equipo->frecuencia}}</small></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Fallas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fallas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Fallas" name="Fallas">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Trabajos Realizados</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                value="Prueba de encendido" name="TrabajoRealizado[]">
                            <label for="customCheckbox1" class="custom-control-label">Prueba de encendido</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                value="limpieza interna equipo" name="TrabajoRealizado[]">
                            <label for="customCheckbox2" class="custom-control-label">limpieza interna equipo</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox3"
                                value="Revisión de pantalla" name="TrabajoRealizado[]">
                            <label for="customCheckbox3" class="custom-control-label">Revisión de pantalla</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox4"
                                value="Revisión Seguros" name="TrabajoRealizado[]">
                            <label for="customCheckbox4" class="custom-control-label">Revisión Seguros</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox5"
                                value="Revisión bombillos" name="TrabajoRealizado[]">
                            <label for="customCheckbox5" class="custom-control-label">Revisión bombillos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox6"
                                value="Verifi. general estructura" name="TrabajoRealizado[]">
                            <label for="customCheckbox6" class="custom-control-label">Verifi. general estructura</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox7"
                                value="Revision valvulas" name="TrabajoRealizado[]">
                            <label for="customCheckbox7" class="custom-control-label">Revision valvulas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox8"
                                value="Revision impresora" name="TrabajoRealizado[]">
                            <label for="customCheckbox8" class="custom-control-label">Revision impresora</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox9"
                                value="Revision basculas" name="TrabajoRealizado[]">
                            <label for="customCheckbox9" class="custom-control-label">Revision basculas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox10"
                                value="Revision Fuente alimentaciòn" name="TrabajoRealizado[]">
                            <label for="customCheckbox10" class="custom-control-label">Revision Fuente
                                alimentaciòn</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox11"
                                value="Revision accesorios" name="TrabajoRealizado[]">
                            <label for="customCheckbox11" class="custom-control-label">Revision accesorios</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox12"
                                value="Revision accesorios" name="TrabajoRealizado[]">
                            <label for="customCheckbox12" class="custom-control-label">Revision accesorios</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox13"
                                value="Revision bateria" name="TrabajoRealizado[]">
                            <label for="customCheckbox13" class="custom-control-label">Revision bateria</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox29"
                                value="Revision Temperatura" name="TrabajoRealizado[]">
                            <label for="customCheckbox29" class="custom-control-label">Revision Temperatura</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox14"
                                value="Revision ruedas" name="TrabajoRealizado[]">
                            <label for="customCheckbox14" class="custom-control-label">Revision ruedas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox15"
                                value="Requiere calibración Anual" name="TrabajoRealizado[]">
                            <label for="customCheckbox15" class="custom-control-label">Requiere calibración
                                Anual</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox16"
                                value="Revision cables" name="TrabajoRealizado[]">
                            <label for="customCheckbox16" class="custom-control-label">Revision cables</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox17"
                                value="Pruebas Sp02" name="TrabajoRealizado[]">
                            <label for="customCheckbox17" class="custom-control-label">Pruebas Sp02</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox18"
                                value="Pruebas de hojillas" name="TrabajoRealizado[]">
                            <label for="customCheckbox18" class="custom-control-label">Pruebas de hojillas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox19"
                                value="Revision panel frontral" name="TrabajoRealizado[]">
                            <label for="customCheckbox19" class="custom-control-label">Revision panel frontral</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox20"
                                value="Lubricac. partes Móviles" name="TrabajoRealizado[]">
                            <label for="customCheckbox20" class="custom-control-label">Lubricac. partes Móviles</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox21"
                                value="Funcionamiento general" name="TrabajoRealizado[]">
                            <label for="customCheckbox21" class="custom-control-label">Funcionamiento general</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="Prueba eKg"
                                name="TrabajoRealizado[]">
                            <label for="customCheckbox22" class="custom-control-label">Prueba eKg</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox23"
                                value="Revisión mangueras" name="TrabajoRealizado[]">
                            <label for="customCheckbox23" class="custom-control-label">Revisión mangueras</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox24"
                                value="Revisión de manometros" name="TrabajoRealizado[]">
                            <label for="customCheckbox24" class="custom-control-label">Revisión de manometros</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox25"
                                value="Limpieza general equipo" name="TrabajoRealizado[]">
                            <label for="customCheckbox25" class="custom-control-label">Limpieza general equipo</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox26"
                                value="Presión no invasiva" name="TrabajoRealizado[]">
                            <label for="customCheckbox26" class="custom-control-label">Presión no invasiva</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox27"
                                value="Revisión barandas" name="TrabajoRealizado[]">
                            <label for="customCheckbox27" class="custom-control-label">Revisión barandas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="customCheckbox28"
                                value="Revisión gato hidráulico" name="TrabajoRealizado[]">
                            <label for="customCheckbox28" class="custom-control-label">Revisión gato hidráulico</label>
                        </div>






                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>


        <div class="card card-success">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Descripción</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Observación</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="observacion" name="observacion">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <div class="card card-success">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Repuesto</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Repuesto" name="Repuesto">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Repuesto</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Repuestodos" name="Repuestodos">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="cantidaddos" name="cantidaddos">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Repuesto</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="Repuestotres" name="Repuestotres">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="cantidadtres" name="cantidadtres">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.card-body -->
        </div>

        <input type="hidden" name="equipo_id" value="{{$equipo->id}}">

        <div class="card card-success">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <a href="{{ route('Mantenimiento.inicio',$equipo->id) }}" class="btn btn-primary">Volver</a>
                <button type="submit" class="btn btn-success">Guardar</button>



            </div>
            <!-- /.card-body -->
        </div>



</form>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop