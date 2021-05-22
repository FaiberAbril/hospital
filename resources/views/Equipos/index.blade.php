@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

    <a class="btn btn-app bg-success" href="{{ route('Equipos.create') }}">
        <span class="badge bg-green"></span>
        <i class="fas fa-cogs"></i> Nuevo Equipo Biomedico
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
            <h3 class="card-title">Equipos Biomedicos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped" id="equipostabla">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Area</th>
                        <th scope="col">Numero de Activo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($equipos as $equipo)
                    <tr>
                        <td>{{$equipo->id}}</td>
                        <td>{{$equipo->area}}</td>
                        <td>{{$equipo->activo}}</td>
                        <td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->marca}}</td>
                        <td>{{$equipo->modelo}}</td>
                        <td>{{$equipo->series}}</td>
                        <td>
                            <a href="Equipos/{{$equipo->id}}" class="btn btn-info">Visualizar</a>
                            <a href="/Mantenimiento" class="btn btn-success">Mantenimiento</a>

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