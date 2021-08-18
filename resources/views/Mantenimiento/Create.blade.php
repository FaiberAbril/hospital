@extends('adminlte::page')

@section('title', 'Manatenimiento')

@section('content_header')
<h1>Protocolo de Mantenimiento</h1>
@stop

@section('content')



<form action="/Mantenimiento" method="POST">
    @csrf


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Orden de trabajo: </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fecha</label>
                            <div class="col-sm-8">
                                <p>{{ date('Y-m-d')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Cliente</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cliente" name="cliente">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Area</label>
                            <div class="col-sm-8">
                                <p>{{$equipo->area}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tipo de Mantenimiento</label>
                            <div class="col-sm-8">
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
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Responsable del área: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rarea" name="rarea">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Teléfono:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Dirección: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Ciudad: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ciudad" name="ciudad">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset($equipo->imagen)}}" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h4>Nombre : <small>{{$equipo->nombre}}</small></h4>
                        <h4>Serie : <small>{{$equipo->serie}}</small></h4>
                        <h4>Marca : <small>{{$equipo->marca}}</small></h4>
                        <h4>Voltaje : <small>{{$equipo->voltaje}}</small></h4>
                        <h4>Modelo : <small>{{$equipo->modelo}}</small></h4>
                        <h4>Frecuencia : <small>{{$equipo->frecuencia}}</small></h4>
                    </div>
                </div>
                </br>


                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Falla reportada</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="fallasreportadas" name="fallasreportadas"
                                    rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nivel de Riesgo: </label>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <select class="custom-select" id="nriesgo" name="nriesgo">
                                        <option value="Alto">Alto</option>
                                        <option value="Medio">Medio</option>
                                        <option value="Bajo Tecnica">Bajo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tiempo de mantenimiento : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tmantenimiento" name="tmantenimiento">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Técnico encargado: </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tecnico" name="tecnico">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label"> teléfono del Técnico encargado:
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tectelefono" name="tectelefono">
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
            <h3 class="card-title">MANUAL DE PROCEDIMIENTO PARA EL MANTENIMIENTO DE EQUIPOS BIOMEDICOS.</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h3>PROCEDIMIENTO GENERAL</h3>
            <p>El mantenimiento de equipos es una serie de ajustes, lubricaciones, limpieza, calibración análisis
                que se realiza
                de manera periódica, para minimizar el riesgo de fallo y asegurar la continua operación de los
                equipos, logrando que se
                encuentren en óptimas condiciones durante su tiempo de vida útil.</p>

            <p>El mantenimiento de los equipos médicos provee los siguientes beneficios </p>

            <ul class="list-group">
                <li class="list-group-item">Prevención de fallas en los equipos o instalaciones</li>
                <li class="list-group-item">Reducción del reemplazo de equipos durante su vida útil. </li>
                <li class="list-group-item">Reducción de la cantidad de repuestos de reserva</li>
                <li class="list-group-item">El buen estado de los equipos e instalaciones durante su vida útil</li>
            </ul>

            <h3 class="pt-2">FRECUENCIA DEL MANTENIMIENTO </h3>

            <p>Un equipo médico debe estar sujeto a un programa de inspecciones, mantenimiento o verificación de su
                funcionamiento,
                sólo si existen varias razones que lo sustenten como: </p>


            <ul class="list-group">
                <li class="list-group-item">1. Prevenir fallas en el equipo o en las instalaciones eléctricas del
                    establecimiento de salud</li>
                <li class="list-group-item">2. Mantener el buen estado del equipo.</li>
                <li class="list-group-item">3. Minimizar el tiempo del equipo fuera de funcionamiento. </li>
                <li class="list-group-item">4. Corregir problemas de operación menores, antes que ellos resulten en
                    fallas mayores del sistema o resultados imprecisos. </li>
                <li class="list-group-item">5. Evitar reparaciones excesivamente costosas.</li>
                <li class="list-group-item">6. Producir un ahorro, de modo que el gasto en mantenimiento de un
                    equipo durante su vida útil sea muy inferior a la adquisición de uno nuevo. </li>
                <li class="list-group-item">7. Reducir la cantidad de repuestos de reserva. </li>
                <li class="list-group-item">8. Cumplir con códigos, estándares y regulaciones o las recomendaciones
                    rigurosas de los fabricantes. </li>
                <li class="list-group-item">7. Reducir la cantidad de repuestos de reserva. </li>
            </ul>

            <h3 class="pt-2">PROCEDIMIENTO GENERAL DE MANTENIMIENTO BIOMEDICO</h3>

            <p>Un equipo médico debe estar sujeto a un programa de inspecciones, mantenimiento o verificación de su
                funcionamiento, sólo si existen varias razones que lo sustenten como: </p>

            <ul class="list-group">
                <li class="list-group-item">i. Inspección de condiciones ambientales del equipo: Humedad,
                    vibraciones mecánicas, polvo, seguridad de la instalación eléctrica, temperatura</li>
                <li class="list-group-item">ii. Inspección externa e interna del equipo. </li>
                <li class="list-group-item">iii. Limpieza externa e interna del equipo. </li>
                <li class="list-group-item">iv. Lubricación y engrase de partes del equipo. </li>
                <li class="list-group-item">v. Reemplazo de ciertas partes del equipo. </li>
                <li class="list-group-item">vi. Ajuste y calibración de partes del equipo. </li>
                <li class="list-group-item">vii. Inspección de seguridad eléctrica. </li>
                <li class="list-group-item">viii. Pruebas de funcionamiento. </li>
            </ul>

            <h3 class="pt-2">DESCRIPCIÓN DEL PROCEDIMIENTO </h3>
            <p>Inicia el procedimiento </p>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Detectar necesidades de mantenimiento: </h5>
                    <p>Con base en el programa de mantenimiento el titular del departamento determina que un equipo
                        biomédico requiere mantenimiento y
                        se comunica con el encargado del servicio y propone fecha para la realización del mismo.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Recolección de equipo: </h5>
                    <p>El día acordado el personal encargado acude al área usuaria a recoger el equipo.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Traslado del equipo: </h5>
                    <p>El personal asignado traslada el equipo a los talleres de mantenimiento.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Mantenimiento del equipo y elaboración de orden de servicio: </h5>
                    <p>Al llegar el equipo el personal asignado realiza un análisis visual y revisa el
                        funcionamiento, posteriormente se limpia la suciedad y se lubrica. De considerarlo necesario
                        se hace cambio de piezas dañadas o deterioradas. Al concluir el mantenimiento, el personal
                        encargado del mismo realiza el llegado de la orden de servicio anotando los datos del equipo
                        y las características y observaciones del trabajo ejecutado.
                    </p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Traslado del equipo: </h5>
                    <p>El equipo es regresado al área por el personal encargado.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Recepción de equipo: </h5>
                    <p>El personal asignado recibe el equipo y revisa que funcione correctamente.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Firma acuse de recibo </h5>
                    <p>El personal responsable del equipo firma de recibido en la orden de servicio</p>
                </li>
                <li class="list-group-item">
                    <h5 class="font-weight-bold">Archivo de documentos: </h5>
                    <p>El personal del área recibe la orden de servicio y la entrega para archivar.</p>
                </li>
            </ul>
            <p>Termina el procedimiento</p>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">HERRAMIENTAS UTILIZADAS</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="herramientas" name="herramientas" rows="3"></textarea>
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
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset($equipo->imagen)}}" class="img-fluid" alt="Product Image"
                                style="width: 400px; height: 400px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h4>Nombre : <small>{{$equipo->nombre}}</small></h4>
                        <h4>Serie : <small>{{$equipo->serie}}</small></h4>
                        <h4>Marca : <small>{{$equipo->marca}}</small></h4>
                        <h4>Voltaje : <small>{{$equipo->voltaje}}</small></h4>
                        <h4>Modelo : <small>{{$equipo->modelo}}</small></h4>
                        <h4>Frecuencia : <small>{{$equipo->frecuencia}}</small></h4>
                    </div>
                </div>
                </br>


                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Fallas:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="Fallas" name="Fallas" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Diagnostico: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="diganostico" name="diganostico" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
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
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                                    value="Prueba de encendido" name="TrabajoRealizado[]">
                                                <label for="customCheckbox1" class="custom-control-label">Prueba de
                                                    encendido</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                                    value="limpieza interna equipo" name="TrabajoRealizado[]">
                                                <label for="customCheckbox2" class="custom-control-label">limpieza
                                                    interna
                                                    equipo</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3"
                                                    value="Revisión de pantalla" name="TrabajoRealizado[]">
                                                <label for="customCheckbox3" class="custom-control-label">Revisión de
                                                    pantalla</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4"
                                                    value="Revisión Seguros" name="TrabajoRealizado[]">
                                                <label for="customCheckbox4" class="custom-control-label">Revisión
                                                    Seguros</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5"
                                                    value="Revisión bombillos" name="TrabajoRealizado[]">
                                                <label for="customCheckbox5" class="custom-control-label">Revisión
                                                    bombillos</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox6"
                                                    value="Verifi. general estructura" name="TrabajoRealizado[]">
                                                <label for="customCheckbox6" class="custom-control-label">Verifi.
                                                    general
                                                    estructura</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox7"
                                                    value="Revision valvulas" name="TrabajoRealizado[]">
                                                <label for="customCheckbox7" class="custom-control-label">Revision
                                                    valvulas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox8"
                                                    value="Revision impresora" name="TrabajoRealizado[]">
                                                <label for="customCheckbox8" class="custom-control-label">Revision
                                                    impresora</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox9"
                                                    value="Revision basculas" name="TrabajoRealizado[]">
                                                <label for="customCheckbox9" class="custom-control-label">Revision
                                                    basculas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox10" value="Revision Fuente alimentaciòn"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox10" class="custom-control-label">Revision
                                                    Fuente
                                                    alimentaciòn</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox11" value="Revision accesorios"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox11" class="custom-control-label">Revision
                                                    accesorios</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox13" value="Revision bateria"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox13" class="custom-control-label">Revision
                                                    bateria</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox29" value="Revision Temperatura"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox29" class="custom-control-label">Revision
                                                    Temperatura</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox14" value="Revision ruedas"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox14" class="custom-control-label">Revision
                                                    ruedas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox15" value="Requiere calibración Anual"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox15" class="custom-control-label">Requiere
                                                    calibración
                                                    Anual</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox16" value="Revision cables"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox16" class="custom-control-label">Revision
                                                    cables</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox17" value="Pruebas Sp02"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox17" class="custom-control-label">Pruebas
                                                    Sp02</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox18" value="Pruebas de hojillas"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox18" class="custom-control-label">Pruebas de
                                                    hojillas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox19" value="Revision panel frontral"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox19" class="custom-control-label">Revision
                                                    panel
                                                    frontral</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox20" value="Lubricac. partes Móviles"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox20" class="custom-control-label">Lubricac.
                                                    partes
                                                    Móviles</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox21" value="Funcionamiento general"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox21"
                                                    class="custom-control-label">Funcionamiento
                                                    general</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox22" value="Prueba eKg" name="TrabajoRealizado[]">
                                                <label for="customCheckbox22" class="custom-control-label">Prueba
                                                    eKg</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox23" value="Revisión mangueras"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox23" class="custom-control-label">Revisión
                                                    mangueras</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox24" value="Revisión de manometros"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox24" class="custom-control-label">Revisión de
                                                    manometros</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox25" value="Limpieza general equipo"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox25" class="custom-control-label">Limpieza
                                                    general
                                                    equipo</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox26" value="Presión no invasiva"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox26" class="custom-control-label">Presión no
                                                    invasiva</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox27" value="Revisión barandas"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox27" class="custom-control-label">Revisión
                                                    barandas</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox"
                                                    id="customCheckbox28" value="Revisión gato hidráulico"
                                                    name="TrabajoRealizado[]">
                                                <label for="customCheckbox28" class="custom-control-label">Revisión gato
                                                    hidráulico</label>
                                            </div>






                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Observación</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="observacion" name="observacion" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">REPUESTOS UTILIZADOS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">Repuesto</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Repuesto"
                                                        name="Repuesto">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">cantidad</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="cantidad"
                                                        name="cantidad">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">Repuesto</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Repuestodos"
                                                        name="Repuestodos">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">cantidad</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="cantidaddos"
                                                        name="cantidaddos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">Repuesto</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="Repuestotres"
                                                        name="Repuestotres">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3"
                                                    class="col-sm-4 col-form-label">cantidad</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="cantidadtres"
                                                        name="cantidadtres">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>






        <input type="hidden" name="equipo_id" value="{{$equipo->id}}">

        <div class="card card-success">
            <div class="card-header">

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