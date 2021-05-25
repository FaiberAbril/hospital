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
                    <input type="date" class="form-control" id="FechaMantenimiento" name="FechaMantenimiento">
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
                              <input type="text" class="form-control" id="Fallas" name="Fallas" >
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
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="Prueba de encendido" name="TipoMantenimiento[]" >
                          <label for="customCheckbox1" class="custom-control-label">Prueba de encendido</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="limpieza interna equipo" name="TipoMantenimiento[]">
                          <label for="customCheckbox2" class="custom-control-label">limpieza interna equipo</label>
                        </div>      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="Revisión de pantalla" name="TipoMantenimiento[]">
                          <label for="customCheckbox3" class="custom-control-label">Revisión de pantalla</label>
                        </div> 
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="Revisión Seguros" name="TipoMantenimiento[]">
                          <label for="customCheckbox4" class="custom-control-label">Revisión Seguros</label>
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
                              <input type="text" class="form-control" id="descripcion" name="descripcion" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Observación</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="observacion" name="observacion" >
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
                              <input type="text" class="form-control" id="Repuesto" name="Repuesto" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="cantidad" name="cantidad" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Repuesto</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Repuestodos" name="Repuestodos" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="cantidaddos" name="cantidaddos" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Repuesto</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Repuestotres" name="Repuestotres" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">cantidad</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="cantidadtres" name="cantidadtres" >
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
            <h3 class="card-title">Datos de propiedad</h3>
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