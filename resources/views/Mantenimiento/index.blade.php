@extends('adminlte::page')

@section('title', 'Mantenimiento')

@section('content_header')
    <h1>Mantenimientos</h1>
@stop

@section('content')


<div class="row ">
               <div class="col-12">
            <div class="col-12">
                <img src="{{asset('img/logoempresa.jpeg')}}" class="product-image" alt="Product Image" style="max-width: 400px; margin-left: 30%;">
            </div>
        </div>
        <div class="col-12 text-center">
                <h5>NIT. 900483816-1</h5>
                <h5 >GLOBAL INGENIERIA SUMINISTROS Y TECNOLOGIA BIOMEDICA SAS</h5>
                <h5>CALLE 23A # 10A  - 43 MALAGA SANTANDER</h5>
                <hr>

        </div>
    </div>


    <a class="btn btn-app bg-success" href="{{ route('Mantenimiento.crear',$equipo->id) }}">
        <span class="badge bg-green"></span>
        <i class="fas fa-cogs"></i> Realizar Mantenimiento
    </a>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
    	<p>Corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif



    <div class="card card-success">
        <div class="card-header">
            <h4 class="card-title">Equipos Biomedico: {{$equipo->nombre}} y Esta Ubicado en el area de {{$equipo->area}} </h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped" id="equipostabla">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fecha Mantenimiento</th>
                        <th scope="col">Tipo de Mantenimiento</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mantenimientos as $mantenimiento)
                    <tr>
                        <td>{{$mantenimiento->id}}</td>
                        <td>{{$mantenimiento->FechaMantenimiento}}</td>
                        <td>{{$mantenimiento->TipoMantenimiento}}</td>
                        <td>{{$mantenimiento->Equipo->nombre}}</td>
                        <td>{{$mantenimiento->Equipo->marca}}</td>
                        <td>{{$mantenimiento->Equipo->modelo}}</td>
                        <td>{{$mantenimiento->Equipo->series}}</td>
                        <td>
                            <a href="Equipos/{{$equipo->id}}" class="btn btn-info">Visualizar</a>
                            <form action="{{ route('Equipos.destroy',$equipo->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" id="eliminar">Eliminar</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script> 
$(document).ready(function() {
  $('#equipostabla').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
</script>

@stop