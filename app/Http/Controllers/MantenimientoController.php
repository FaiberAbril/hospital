<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Mantenimiento;
use Illuminate\Support\Facades\Session;

class MantenimientoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
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
        $mantenimientos->descripcion = $request->get('descripcion');
        $mantenimientos->observacion = $request->get('observacion');
        $mantenimientos->Repuesto = $request->get('Repuesto');
        $mantenimientos->cantidad = $request->get('cantidad');
        $mantenimientos->Repuestodos = $request->get('Repuestodos');
        $mantenimientos->cantidaddos = $request->get('cantidaddos');
        $mantenimientos->Repuestotres = $request->get('Repuestotres');
        $mantenimientos->cantidadtres = $request->get('cantidadtres');

        $mantenimientos->equipo_id = $request->get('equipo_id');
        $checkbox = "";

        if(!empty($request->input('TrabajoRealizado'))){
            $checkbox = implode(",",$request->input('TrabajoRealizado'));

        }else{
            $checkbox = '';
        }
        
        $mantenimientos->TrabajoRealizado = $checkbox;

        $mantenimientos->save();

        $equipo = Equipo::find($mantenimientos->equipo_id);
        $mantenimientos = Mantenimiento::where('equipo_id', $mantenimientos->equipo_id)->get();

        $request->session()->flash('Mantenimiento_creado', 'Se Realizo mantenimiento');


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
        $mantenimientos = Mantenimiento::find($id);
        return view('Mantenimiento.ver', compact('mantenimientos'));
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
          
        $mantenimientoaeliminar = Mantenimiento::findOrFail($id);
        $idEquipo = $mantenimientoaeliminar->equipo_id;

        $mantenimientoaeliminar->delete();


        $equipo = Equipo::find($idEquipo);
        $mantenimientos = Mantenimiento::where('equipo_id', $idEquipo)->get();


        session()->flash('Mantenimiento_Eliminiar', 'Se elimino mantenimiento con Exito');

        return view('Mantenimiento.index', compact('equipo', 'mantenimientos'));
    }
}
