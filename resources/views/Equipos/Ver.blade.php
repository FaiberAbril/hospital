@extends('adminlte::page')

@section('title', 'EquipoBiomedico')

@section('content_header')
@stop

@section('content')

@if (Session::has('Equipo_Actualizado'))

<div class="card bg-success">
    <div class="card-header">
        <h3 class="card-title">Success</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{session('Equipo_Actualizado') }}
    </div>
    <!-- /.card-body -->
</div>
@endif


 <div class="container callout callout-info">
    <div class="row ">
        <h1 style="margin-left: 10%;">Hoja de Vida Equipo Biomedico</h1>
        <div class="col-12 col-sm-6">
            <div class="col-12">
                <img src="{{asset($equipos->imagen)}}" class="product-image" alt="Product Image">
            </div>
        </div>
        <div class="col-12 col-sm-6">
                <h4>Area : <small>{{$equipos->area}}</small></h4>
                <hr>
                <h3 >Caracteristicas Propias del equipo</h3>
                <hr>
                <h4>Nombre : <small>{{$equipos->nombre}}</small></h4>
                <h4>Marca : <small>{{$equipos->marca}}</small></h4>
                <h4>Modelo : <small>{{$equipos->modelo}}</small></h4>
                <h4>Fabricante : <small>{{$equipos->fabrica}}</small></h4>
                <h4>Proveedor : <small>{{$equipos->Proveedor}}</small></h4>
                <h4>Tel Proveedor : <small>{{$equipos->TelProveedor}}</small></h4>
                <h4>Fecha de Compra : <small>{{$equipos->FechaCompra}}</small></h4>
                <h4>Tiempo de Garantia  : <small>{{$equipos->TiempoGarantia}} Años</small></h4>
                <h4>Ciclo de vida Util : <small>{{$equipos->ciclovida}} Años</small></h4>
    
        </div>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Fuente de Alimentacion : <small>{{$equipos->fuenteAlimentacion}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Caracteristicas de Fabricación</h2>
        <div class="col-12" style="margin-left: 10%;">
            <h4>Voltaje : <small>{{$equipos->voltaje}}</small></h4>
            <h4>Corriente : <small>{{$equipos->corriente}}</small></h4>
            <h4>Frecuencia : <small>{{$equipos->frecuencia}}</small></h4>
            <h4>Potencia : <small>{{$equipos->potencia}}</small></h4>
            <h4>Presión : <small>{{$equipos->presion}}</small></h4>
            <h4>Capacidad : <small>{{$equipos->capacidad}}</small></h4>
        </div>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Clasificación de la Tecnología por riesgo: <small>{{$equipos->riesgo}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Clasificación de la Tecnología por uso: <small>{{$equipos->uso}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Dato de propiedad: <small>{{$equipos->propiedad}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Tipo de Mantenimiento: <small>{{$equipos->mantenimiento}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Frecuencia de Mantenimiento Preventivo: <small>{{$equipos->mantenimiento}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Manuales: <small>{{$equipos->preventivo}}</small></h2>
    </div>
 </div>

 <div class="container callout callout-info">
    <div class="row ">
        <h2 style="margin-left: 10%;">Caracteristicas de Fabricación</h2>
        <div class="col-12" style="margin-left: 10%;">
            <h4>Nombre : <small>{{$equipos->anexonombre}}</small></h4>
            <h4>Serie : <small>{{$equipos->anexoserie}}</small></h4>
            <h4>Modelo : <small>{{$equipos->anexomodelo}}</small></h4>
            <h4>Numero Activo : <small>{{$equipos->anexoactivo}}</small></h4>
        </div>
    </div>
 </div>

 
 <div class="container callout callout-info">
    <div class="row ">

        <div class="col-12" style="margin-left: 10%;">
            <a class="btn btn-app bg-success" href="/Equipos">
                <span class="badge bg-purple">volver</span>
                <i class="fas fa-arrow-left "></i> Volver
              </a>

              <a class="btn btn-app bg-primary" href="{{ route('Equipos.edit', $equipos->id)}}">
                <span class="badge bg-purple">Editar</span>
                <i class="fas fa-edit"></i> Modificar
              </a>
          
         
        </div>
    </div>
 </div>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop