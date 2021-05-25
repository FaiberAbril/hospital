@extends('adminlte::page')

@section('title', 'Visualizar')

@section('content_header')
    <h1>Visualizar Mantenimiento</h1>
@stop

@section('content')
   <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Datos de Mantenimiento</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">

                <div class="row ">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset($mantenimientos->Equipo->imagen)}}" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h4>Fecha : <small>{{$mantenimientos->FechaMantenimientoa}}</small></h4>
                        <h4>Tipo de Mantenimiento : <small>{{$mantenimientos->TipoMantenimiento}}</small></h4>
                        <h4>Nombre : <small>{{$mantenimientos->Equipo->nombre}}</small></h4>
                        <h4>Serie : <small>{{$mantenimientos->Equipo->serie}}</small></h4>
                        <h4>Marca : <small>{{$mantenimientos->Equipo->marca}}</small></h4>
                        <h4>Voltaje : <small>{{$mantenimientos->Equipo->voltaje}}</small></h4>
                        <h4>Modelo : <small>{{$mantenimientos->Equipo->modelo}}</small></h4>
                        <h4>Frecuencia : <small>{{$mantenimientos->Equipo->frecuencia}}</small></h4>
                        <h4>Fallas : <small>{{$mantenimientos->Equipo->Fallas}}</small></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Trabajo Realizados</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row ">
                    <div class="col-12 ">
                        <h4>Trabajos Realizados : <small>{{$mantenimientos->TrabajoRealizado}}</small></h4>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Descripción</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row ">
                    <div class="col-12 ">
                        <h4>Descripción : <small>{{$mantenimientos->descripcion}}</small></h4>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Observación</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row ">
                    <div class="col-12 ">
                        <h4>Descripción : <small>{{$mantenimientos->observacion}}</small></h4>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 


    <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">Repuestos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">

                <div class="row ">
                    <div class="col-12">
                        <h4>Repuesto : <small>{{$mantenimientos->Repuesto}}</small> cantidad :<small>{{$mantenimientos->cantidad}}</small>  </h4>
                        <h4>Repuesto : <small>{{$mantenimientos->Repuestodos}}</small> cantidad :<small>{{$mantenimientos->cantidaddos}}</small>  </h4>
                        <h4>Repuesto : <small>{{$mantenimientos->Repuestotres}}</small> cantidad :<small>{{$mantenimientos->cantidadtres}}</small>  </h4>

                    </div>
                </div>
            </div>
        </div>
       

    <div class="card card-success">
        <div class="card-header">
           
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="{{ route('Mantenimiento.inicio',$mantenimientos->Equipo->id) }}" class="btn btn-success">Volver</a>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop