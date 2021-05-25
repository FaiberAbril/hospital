<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Mantenimiento;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function inicio($id)
    {
        $equipo = Equipo::find($id);
        $mantenimientos = Mantenimiento::where('equipo_id', $id)->get();
        return view('Mantenimiento.index', compact('equipo', 'mantenimientos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mantenimiento.create');
    }

    public function crear($id){
        $equipo = Equipo::find($id);
        return view('Mantenimiento.create')->with('equipo',$equipo);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mantenimientos = new Mantenimiento();

        $mantenimientos->FechaMantenimiento = $request->get('FechaMantenimiento');
        $mantenimientos->TipoMantenimiento = $request->get('TipoMantenimiento');
        $mantenimientos->Fallas = $request->get('Fallas');
        $mantenimientos->TrabajoRealizado = $request->get('TrabajoRealizado');
        $mantenimientos->descripcion = $request->get('descripcion');
        $mantenimientos->observacion = $request->get('observacion');
        $mantenimientos->Repuesto = $request->get('Repuesto');
        $mantenimientos->cantidad = $request->get('cantidad');
        $mantenimientos->Repuestodos = $request->get('Repuestodos');
        $mantenimientos->cantidaddos = $request->get('cantidaddos');
        $mantenimientos->Repuestotres = $request->get('Repuestotres');
        $mantenimientos->cantidadtres = $request->get('cantidadtres');

        $mantenimientos->equipo_id = $request->get('equipo_id');

        if(!empty($request->input('TipoMantenimiento'))){
            $checkbox = join (',',$request->input('TipoMantenimiento'));

        }else{
            $checkbox = '';
        }

        $equipos->save();

        $equipo = Equipo::find($mantenimientos->equipo_id);
        $mantenimientos = Mantenimiento::where('equipo_id', $mantenimientos->equipo_id)->get();
        return view('Mantenimiento.index', compact('equipo', 'mantenimientos'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
