@extends('adminlte::page')

@section('title', 'Modificar')

@section('content_header')
<h1>Modoficar Equipo Biomedico</h1>
@stop

@section('content')
<form action="{{ route('Equipos.update', $equipos->id)}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Imagen del Equipo Biomedico</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen" value="{{$equipos->imagen}}">
                <label class="custom-file-label" for="imagen">Choose file</label>

            </div>
            <img id="vistaImagen" src="{{asset($equipos->imagen)}}" style="max-width: 300px;">

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
                @if ($equipos->area == "odontología")                
                  <option selected value="odontología">odontología</option>
                  <option value="Fisioterapia">Fisioterapia</option>
                  <option value="Urgencias">Urgencias</option>
                  <option value="Partos y esterilización">Partos y esterilización</option>
                  <option value="Laboratorio clínico">Laboratorio clínico</option>              
                 @elseif ($equipos->area == "Fisioterapia")
                 <option  value="odontología">odontología</option>
                 <option selected value="Fisioterapia">Fisioterapia</option>
                 <option value="Urgencias">Urgencias</option>
                 <option value="Partos y esterilización">Partos y esterilización</option>
                 <option value="Laboratorio clínico">Laboratorio clínico</option>  
                 @elseif ($equipos->area == "Urgencias")
                 <option  value="odontología">odontología</option>
                 <option value="Fisioterapia">Fisioterapia</option>
                 <option selected value="Urgencias">Urgencias</option>
                 <option value="Partos y esterilización">Partos y esterilización</option>
                 <option value="Laboratorio clínico">Laboratorio clínico</option>
                 @elseif ($equipos->area == "Partos y esterilización")
                 <option  value="odontología">odontología</option>
                 <option value="Fisioterapia">Fisioterapia</option>
                 <option  value="Urgencias">Urgencias</option>
                 <option selected value="Partos y esterilización">Partos y esterilización</option>
                 <option value="Laboratorio clínico">Laboratorio clínico</option>
                @else
                <option  value="odontología">odontología</option>
                <option value="Fisioterapia">Fisioterapia</option>
                <option  value="Urgencias">Urgencias</option>
                <option  value="Partos y esterilización">Partos y esterilización</option>
                <option selected value="Laboratorio clínico">Laboratorio clínico</option>
                 @endif

                </select>

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
                              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$equipos->nombre}}" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Marca</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="marca" name="marca" value="{{$equipos->marca}}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Modelo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="modelo" name="modelo" value="{{$equipos->modelo}}">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Serie</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="series" name="series" value="{{$equipos->series}}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de Activo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="activo" name="activo" value="{{$equipos->activo}}">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fabricante</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="fabrica" name="fabrica" value="{{$equipos->fabrica}}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="Proveedor" name="Proveedor" value="{{$equipos->Proveedor}}">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tel Proveedor</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="TelProveedor" name="TelProveedor" value="{{$equipos->TelProveedor}}" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha Compra</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" id="FechaCompra" name="FechaCompra" value="{{$equipos->FechaCompra}}">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tiempo Garantia(Años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="TiempoGarantia" name="TiempoGarantia" value="{{$equipos->TiempoGarantia}}" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Ciclo de vida util(años)</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="ciclovida" name="ciclovida" value="{{$equipos->ciclovida}}">
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
                  @if ($equipos->fuenteAlimentacion == "ELECTRICIDAD")
                  <option selected value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option value="AGUA">AGUA</option>
                  <option value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option value="GAS PROPANO">GAS PROPANO</option>
                  <option value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "AGUA")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option selected value="AGUA">AGUA</option>
                  <option value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option value="GAS PROPANO">GAS PROPANO</option>
                  <option value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "COMBUSTIBLE")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option selected value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option value="GAS PROPANO">GAS PROPANO</option>
                  <option value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "GAS PROPANO")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option  value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option selected value="GAS PROPANO">GAS PROPANO</option>
                  <option value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "AIRE")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option  value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option  value="GAS PROPANO">GAS PROPANO</option>
                  <option selected value="AIRE">AIRE</option>
                  <option value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "VAPOR")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option  value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option  value="GAS PROPANO">GAS PROPANO</option>
                  <option  value="AIRE">AIRE</option>
                  <option selected value="VAPOR">VAPOR</option>
                  <option value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @elseif ($equipos->fuenteAlimentacion == "OXIGENO")
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option  value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option  value="GAS PROPANO">GAS PROPANO</option>
                  <option  value="AIRE">AIRE</option>
                  <option  value="VAPOR">VAPOR</option>
                  <option selected value="OXIGENO">OXIGENO</option>
                  <option value="OTRAS">OTRAS</option>
                  @else
                  <option  value="ELECTRICIDAD">ELECTRICIDAD</option>
                  <option  value="AGUA">AGUA</option>
                  <option  value="COMBUSTIBLE">COMBUSTIBLE</option>
                  <option  value="GAS PROPANO">GAS PROPANO</option>
                  <option  value="AIRE">AIRE</option>
                  <option  value="VAPOR">VAPOR</option>
                  <option  value="OXIGENO">OXIGENO</option>
                  <option selected value="OTRAS">OTRAS</option>
                  @endif

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
                              <input type="text" class="form-control" id="voltaje" name="voltaje" value="{{$equipos->voltaje}}">
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Corriente</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="corriente" name="corriente" value="{{$equipos->corriente}}" >
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Frecuencia</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="frecuencia" name="frecuencia" value="{{$equipos->frecuencia}}" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Potencia</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="potencia" name="potencia" value="{{$equipos->potencia}}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Presion</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="presion" name="presion" value="{{$equipos->presion}}" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Capacidad</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="capacidad" name="capacidad" value="{{$equipos->capacidad}}" >
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
                  @if ($equipos->riesgo == "CLASE I")
                  <option selected value="CLASE I">CLASE I</option>
                  <option value="CLASE II B">CLASE II B</option>
                  <option value="CLASE II A">CLASE II A</option>
                  <option value="CLASE III">CLASE III</option>
                  @elseif ($equipos->riesgo == "CLASE II B")
                  <option  value="CLASE I">CLASE I</option>
                  <option selected value="CLASE II B">CLASE II B</option>
                  <option value="CLASE II A">CLASE II A</option>
                  <option value="CLASE III">CLASE III</option>                  
                  @elseif ($equipos->riesgo == "CLASE II A")
                  <option  value="CLASE I">CLASE I</option>
                  <option  value="CLASE II B">CLASE II B</option>
                  <option selected value="CLASE II A">CLASE II A</option>
                  <option value="CLASE III">CLASE III</option>
                  @else
                  <option  value="CLASE I">CLASE I</option>
                  <option  value="CLASE II B">CLASE II B</option>
                  <option  value="CLASE II A">CLASE II A</option>
                  <option selected value="CLASE III">CLASE III</option>
                  @endif              
           
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
                  @if ($equipos->uso == "DIAGNOSTICO")
                  <option selected value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option value="REHABILITACION">REHABILITACION</option>
                  <option value="PREVENCION">PREVENCION</option>
                  <option value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>
                  @elseif ($equipos->uso == "TRATAMIENTO Y MANTENIMIENTO")
                  <option value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option selected value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option value="REHABILITACION">REHABILITACION</option>
                  <option value="PREVENCION">PREVENCION</option>
                  <option value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>                
                  @elseif ($equipos->uso == "REHABILITACION")
                  <option value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option selected value="REHABILITACION">REHABILITACION</option>
                  <option value="PREVENCION">PREVENCION</option>
                  <option value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>>
                  @elseif ($equipos->uso == "REHABILITACION")
                  <option value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option value="REHABILITACION">REHABILITACION</option>
                  <option selected value="PREVENCION">PREVENCION</option>
                  <option value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>>
                  @else
                  <option value="DIAGNOSTICO">DIAGNOSTICO</option>
                  <option value="TRATAMIENTO Y MANTENIMIENTO">TRATAMIENTO Y MANTENIMIENTO</option>
                  <option value="REHABILITACION">REHABILITACION</option>
                  <option value="PREVENCION">PREVENCION</option>
                  <option selected value="ANALISIS DE LABORATORIO">ANALISIS DE LABORATORIO</option>
                  @endif              
           
                  
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
                  @if ($equipos->propiedad == "PROPIO")
                  <option selected value="PROPIO">PROPIO</option>
                  <option value="RENTA">RENTA</option>
                  <option value="COMODATO">COMODATO</option>
                  <option value="OTRA">OTRA</option>
                  @elseif ($equipos->propiedad == "RENTA")
                  <option value="PROPIO">PROPIO</option>
                  <option selected value="RENTA">RENTA</option>
                  <option value="COMODATO">COMODATO</option>
                  <option value="OTRA">OTRA</option>
                  @elseif ($equipos->propiedad == "COMODATO")
                  <option value="PROPIO">PROPIO</option>
                  <option value="RENTA">RENTA</option>
                  <option selected value="COMODATO">COMODATO</option>
                  <option value="OTRA">OTRA</option>
                  @else
                  <option value="PROPIO">PROPIO</option>
                  <option value="RENTA">RENTA</option>
                  <option value="COMODATO">COMODATO</option>
                  <option selected value="OTRA">OTRA</option>
                  @endif

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
                  @if ($equipos->mantenimiento == "PROPIO")
                  <option selected value="PROPIO">PROPIO</option>
                  <option value="GARANTIA">GARANTIA</option>
                  <option value="CONTRATADO">CONTRATADO</option>
                  <option value="COMODATO">COMODATO</option>
                  @elseif ($equipos->mantenimiento == "GARANTIA")
                  <option value="PROPIO">PROPIO</option>
                  <option selected value="GARANTIA">GARANTIA</option>
                  <option value="CONTRATADO">CONTRATADO</option>
                  <option value="COMODATO">COMODATO</option>
                  @elseif ($equipos->mantenimiento == "CONTRATADO")
                  <option value="PROPIO">PROPIO</option>
                  <option value="GARANTIA">GARANTIA</option>
                  <option selected value="CONTRATADO">CONTRATADO</option>
                  <option value="COMODATO">COMODATO</option>
                  @else
                  <option value="PROPIO">PROPIO</option>
                  <option value="GARANTIA">GARANTIA</option>
                  <option value="CONTRATADO">CONTRATADO</option>
                  <option selected value="COMODATO">COMODATO</option>
                  @endif

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
                  @if ($equipos->preventivo == "MENSUAL")
                  <option selected value="MENSUAL">MENSUAL</option>
                  <option value="SEMESTRAL">SEMESTRAL</option>
                  <option value="TRIMESTRAL">TRIMESTRAL</option>
                  <option value="ANUAL">ANUAL</option>
                  @elseif ($equipos->preventivo == "SEMESTRAL")
                  <option value="MENSUAL">MENSUAL</option>
                  <option selected value="SEMESTRAL">SEMESTRAL</option>
                  <option value="TRIMESTRAL">TRIMESTRAL</option>
                  <option value="ANUAL">ANUAL</option>
                  @elseif ($equipos->preventivo == "TRIMESTRAL")
                  <option value="MENSUAL">MENSUAL</option>
                  <option value="SEMESTRAL">SEMESTRAL</option>
                  <option selected value="TRIMESTRAL">TRIMESTRAL</option>
                  <option value="ANUAL">ANUAL</option>
                  @else
                  <option value="MENSUAL">MENSUAL</option>
                  <option value="SEMESTRAL">SEMESTRAL</option>
                  <option value="TRIMESTRAL">TRIMESTRAL</option>
                  <option selected value="ANUAL">ANUAL</option>
                  @endif
                  
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
                  @if ($equipos->manual == "DESPIECE")
                  <option selected value="DESPIECE">DESPIECE</option>
                  <option value="USUARIO">USUARIO</option>
                  <option value="TECNICO">TECNICO</option>
                  <option  value="NO POSEE">NO POSEE</option>
                  @elseif ($equipos->manual == "USUARIO")
                  <option value="DESPIECE">DESPIECE</option>
                  <option selected value="USUARIO">USUARIO</option>
                  <option value="TECNICO">TECNICO</option>
                  <option  value="NO POSEE">NO POSEE</option>
                  @elseif ($equipos->manual == "TECNICO")
                  <option value="DESPIECE">DESPIECE</option>
                  <option value="USUARIO">USUARIO</option>
                  <option selected value="TECNICO">TECNICO</option>
                  <option  value="NO POSEE">NO POSEE</option>
                  @else
                  <option value="DESPIECE">DESPIECE</option>
                  <option value="USUARIO">USUARIO</option>
                  <option value="TECNICO">TECNICO</option>
                  <option selected value="NO POSEE">NO POSEE</option>
                  @endif
                
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
                              <input type="text" class="form-control" id="anexonombre" name="anexonombre" value="{{$equipos->anexonombre}}" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Serie</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexoserie" name="anexoserie" value="{{$equipos->anexoserie}}">
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Modulo</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexomodelo" name="anexomodelo" value="{{$equipos->anexomodelo}}" >
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Numero de Activos</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="anexoactivo" name="anexoactivo" value="{{$equipos->anexoactivo}}" >
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