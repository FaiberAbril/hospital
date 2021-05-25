@extends('adminlte::page')

@section('title', 'Mantenimiento')

@section('content_header')
    <h1>Mantenimientos</h1>
@stop

@section('content')

@if (Session::has('Mantenimiento_creado'))

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
        {{session('Mantenimiento_creado') }}
    </div>
    <!-- /.card-body -->
</div>
@elseif(Session::has('Mantenimiento_Eliminiar'))

<div class="card bg-danger">
    <div class="card-header">
        <h3 class="card-title">Danger</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {{session('Mantenimiento_Eliminiar') }}
    </div>
    <!-- /.card-body -->
</div>
@endif


    <a class="btn btn-app bg-success" href="{{ route('Mantenimiento.crear',$equipo->id) }}">
        <span class="badge bg-green"></span>
        <i class="fas fa-cogs"></i> Realizar Mantenimiento
    </a>





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
                            <a href="{{ route('MantenimientoVer.show',$mantenimiento->id) }}" class="btn btn-info">Visualizar</a>
                            <form action="{{ route('Mantenimiento.destroy',$mantenimiento->id) }}" method="POST">
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