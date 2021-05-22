@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo Equipo Biomedico</h1>
@stop

@section('content')
<div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Equipos Biomedicos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="custom-file">
                      <input type="file" class="custom-file-input" id="imagen" name="imagen">
                      <label class="custom-file-label" for="imagen">Choose file</label>
                     <img id="">

                    </div>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
} </script>
@stop