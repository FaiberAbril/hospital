@extends('adminlte::page')

@section('title', 'Visualizar')

@section('content_header')
    <h1>Visualizar Mantenimiento</h1>
@stop

@section('content')


<div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Orden de trabajo: </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                    <div class="col-12 col-sm-6">
                        <h4>Fecha de mantenimiento : <small>{{$mantenimientos->FechaMantenimiento}}</small></h4>
                        <h4>Orden de servicio #:  <small>{{$mantenimientos->id}}</small></h4>
                        <h4>cliente : <small>{{$mantenimientos->cliente}}</small></h4>
                        <h4>Área : <small>{{$mantenimientos->Equipo->area}}</small></h4>
                        <h4>Tipo de mantenimiento:  <small>{{$mantenimientos->TipoMantenimiento}}</small></h4>
                        <h4>responsable del área:  <small>{{$mantenimientos->rarea}}</small></h4>
                        <h4>Teléfono:  <small>{{$mantenimientos->telefono}}</small></h4>
                        <h4>Dirección:  <small>{{$mantenimientos->direccion}}</small></h4>
                        <h4>Ciudad: <small>{{$mantenimientos->ciudad}}</small></h4>
                    </div>



                    <div class="row ">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset($mantenimientos->Equipo->imagen)}}" class="product-image" alt="Product Image" style="width: 400px; height: 400px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h4>Fecha : <small>{{$mantenimientos->FechaMantenimiento}}</small></h4>
                        <h4>Tipo de Mantenimiento : <small>{{$mantenimientos->TipoMantenimiento}}</small></h4>
                        <h4>Nombre : <small>{{$mantenimientos->Equipo->nombre}}</small></h4>
                        <h4>Serie : <small>{{$mantenimientos->Equipo->serie}}</small></h4>
                        <h4>Marca : <small>{{$mantenimientos->Equipo->marca}}</small></h4>
                        <h4>Voltaje : <small>{{$mantenimientos->Equipo->voltaje}}</small></h4>
                        <h4>Modelo : <small>{{$mantenimientos->Equipo->modelo}}</small></h4>
                        <h4>Frecuencia : <small>{{$mantenimientos->Equipo->frecuencia}}</small></h4>
                        <h4>descripción : <small>{{$mantenimientos->Equipo->descripcion}}</small></h4>
                    </div>
                </div>
</br>
                <div class="row">
                    <div class="col-12">
                        <h4>Fallas Reportadas</h4>
                        <p>{{$mantenimientos->fallasreportadas}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                    <h4>Nivel de Riesgo:   <small>{{$mantenimientos->nriesgo}}</small></h4>
                        <h4>Tiempo de mantenimiento:  <small>{{$mantenimientos->tmantenimiento}}</small></h4>
                        <h4>Técnico encargado:  <small>{{$mantenimientos->tecnico}}</small></h4>
                        <h4>teléfono:  <small>{{$mantenimientos->tectelefono}}</small></h4>

                    </div>
                </div>


                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 



   <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">PROCEDIMIENTO GENERAL </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>HERRAMIENTAS UTILIZADAS:  </h4>
                    <p>{{$mantenimientos->herramientas}}</p>
                </div>
                <div class="col-12">
                    <h4>Próximo mantenimiento:  </h4> 
                    <p>{{$mantenimientos->pmantenimiento }}</p>
                </div>
            </div>

            </div>
        </div>
        <!-- /.card-body -->
    </div> 

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">REPORTE DE FINALIZACIÓN </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row ">
                    <div class="col-12 ">
                        <h4>Fallas : <small>{{$mantenimientos->Fallas}}</small></h4>
                        <h4>DIAGNOSTICO:  <small>{{$mantenimientos->diganostico}}</small></h4>
                        <h4>Trabajos Realizados : <small>{{$mantenimientos->TrabajoRealizado}}</small></h4>
                        <h4>OBSERVACIONES: : <small>{{$mantenimientos->observacion}}</small></h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12">

                    @if (!Empty($mantenimientos->Repuesto))
                    <h4>Repuesto : <small>{{$mantenimientos->Repuesto}}</small> cantidad :<small>{{$mantenimientos->cantidad}}</small>  </h4>
                    @elseif (!Empty($mantenimientos->Repuestodos))
                    <h4>Repuesto : <small>{{$mantenimientos->Repuestodos}}</small> cantidad :<small>{{$mantenimientos->cantidaddos}}</small>  </h4>
                    @elseif (!Empty($mantenimientos->Repuestotres))
                         
                    <h4>Repuesto : <small>{{$mantenimientos->Repuestotres}}</small> cantidad :<small>{{$mantenimientos->cantidadtres}}</small>  </h4>

                    @endif
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div> 


    <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title"></h3>
        </div>
        <div class="card-body">
            <a href="{{ route('Mantenimiento.inicio',$mantenimientos->Equipo->id) }}" class="btn btn-success">Volver</a>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop