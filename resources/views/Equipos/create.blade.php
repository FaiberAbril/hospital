@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
<h1>Nuevo Equipo Biomedico</h1>
@stop

@section('content')
<form action="/Equipos" enctype="multipart/form-data" method="POST">
    @csrf

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Imagen del Equipo Biomedico</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen" required>
                <label class="custom-file-label" for="imagen">Choose file</label>

            </div>
            <img id="vistaImagen" style="max-width: 300px;">

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Ubicación equipo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label>Area</label>
                <select class="custom-select" id="area" name="area">
                  <option value="odontología">odontología</option>
                  <option value="Fisioterapia">Fisioterapia</option>
                  <option value="Urgencias">Urgencias</option>
                  <option value="Partos y esterilización">Partos y esterilización</option>
                  <option value="Laboratorio clínico">Laboratorio clínico</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Descripción Equipo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">descripción</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
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
            <h3 class="card-title">Caracteristicas Propias del Equipo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="nombre" name="nombre" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Marca</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="marca" name="marca" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Modelo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="modelo" name="modelo">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Serie</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="series" name="series" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de Activo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="activo" name="activo">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fabricante</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="fabrica" name="fabrica" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Proveedor" name="Proveedor">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tel Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="TelProveedor" name="TelProveedor" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Compra</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="FechaCompra" name="FechaCompra">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tiempo Garantia(Años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="TiempoGarantia" name="TiempoGarantia" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Ciclo de vida util(años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="ciclovida" name="ciclovida">
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
            <h3 class="card-title">Fuente de Alimentacion</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="fuenteAlimentacion" name="fuenteAlimentacion">
                  <option value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option value="AGUA">AGUA</option>
                  <option value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option value="GAS PROPANO">GAS PROPANO</option>
                  <option value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Caracteristicas de Fabricación</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Voltaje</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="voltaje" name="voltaje" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Corriente</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="corriente" name="corriente" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Frecuencia</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="frecuencia" name="frecuencia" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Potencia</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="potencia" name="potencia" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Presion</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="presion" name="presion" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Capacidad</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="capacidad" name="capacidad" >
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
            <h3 class="card-title">Clasificación de la Tecnología por riesgo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="riesgo" name="riesgo">
                  <option value="CLASE I">CLASE I</option>
                  <option value="CLASE II B">CLASE II B</option>
                  <option value="CLASE II A">CLASE II A</option>
                  <option value="CLASE III">CLASE III</option>
           
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Clasificación de la Tecnología por USO</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="uso" name="uso">
                  <option value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option value="REHABILITACION">REHABILITACION</option>
                  <option value="PREVENCION">PREVENCION</option>
                  <option value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Datos de propiedad</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="propiedad" name="propiedad">
                  <option value="PROPIO">PROPIO</option>
                  <option value="RENTA">RENTA</option>
                  <option value="COMODATO">COMODATO</option>
                  <option value="OTRA">OTRA</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tipo de Mantenimiento</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="mantenimiento" name="mantenimiento">
                  <option value="PROPIO">PROPIO</option>
                  <option value="GARANTIA">GARANTIA</option>
                  <option value="CONTRATADO">CONTRATADO</option>
                  <option value="COMODATO">COMODATO</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Frecuencia de Mantenimiento Preventivo</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="preventivo" name="preventivo">
                  <option value="MENSUAL">MENSUAL</option>
                  <option value="SEMESTRAL">SEMESTRAL</option>
                  <option value="TRIMESTRAL">TRIMESTRAL</option>
                  <option value="ANUAL">ANUAL</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Manuales</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <select class="custom-select" id="manual" name="manual">
                  <option value="DESPIECE">DESPIECE</option>
                  <option value="USUARIO">USUARIO</option>
                  <option value="TECNICO">TECNICO</option>
                  <option selected value="NO POSEE">NO POSEE</option>
                </select>
              </div>

        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Modulos Anexos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexonombre" name="anexonombre" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Serie</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexoserie" name="anexoserie" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Modulo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexomodelo" name="anexomodelo" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de Activos</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexoactivo" name="anexoactivo" >
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
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <a href="/Equipos" class="btn btn-primary">Volver</a>
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
<script> document.getElementById("imagen").onchange = function (e) {

        var file = e.target.files[0];

        if (file) {
            // Creamos el objeto de la clase FileReader
            var reader = new FileReader();

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function () {
                $('#vistaImagen').attr("src", reader.result);
            };

        }

        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(file);

    }</script>
@stop