<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Carreras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','Cache'])->only(['index', 'tabla']);
    }
    
    public function index()
    {
        $titulo = 'Inicio';
        $items = Alumnos::all();
        $carrera = Carreras::all();
        return view('/crud/index', compact('titulo', 'items'))->with('carrera',$carrera);
    }
    public function tabla()
    {
        $titulo = 'Información';
        $items = Alumnos::all();
        return view("misArchivos.tabla", compact('titulo', 'items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar';
        $carrera = Carreras::all();
        return view('/crud/create', compact('titulo'))->with('carrera',$carrera);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Alumnos();
        $item->nombre_alumno = $request->nombre_alumno;
        $item->numero_control = $request->numero_control;
        $item->telefono = $request->telefono;
        $item->id_carrera = $request->carrera; // Asignar el ID de la carrera seleccionada
        $item->fecha_nacimiento = $request->fecha_nacimiento;
        $item->escuela_anterior = $request->escuela_anterior;
        $item->fecha_ingreso = $request->fecha_ingreso;
        $item->save();
        Alert::success('Agregado', 'Se agrego correctamente');
        return redirect('/');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar Alumnos";
        $items = Alumnos::find($id);
        $carreras = Carreras::all();
        return view( "/crud/eliminar" , compact( 'items' , 'titulo', 'carreras'));
    }
    public function datos_A($id)
    {
        $titulo = "Subir archivos";
        $items = Alumnos::find($id);
        $carreras = Carreras::all();
        return view("misArchivos.agregarArchivo", compact('items', 'titulo', 'carreras'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar datos';
        $items = Alumnos::find($id);
        $carreras = Carreras::all();
        return view('/crud/edit', compact('items' , 'titulo', 'carreras'));
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
        $item = Alumnos::find($id);
        $item->nombre_alumno = $request->nombre_alumno;
        $item->numero_control = $request->numero_control;
        $item->telefono = $request->telefono;
        $item->id_carrera = $request->carrera; // Asignar el ID de la carrera seleccionada
        $item->fecha_nacimiento = $request->fecha_nacimiento;
        $item->escuela_anterior = $request->escuela_anterior;
        $item->fecha_ingreso = $request->fecha_ingreso;
        $item->save();
        Alert::success('Actualizo', 'Se actualizo correctamente');
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Alumnos::find($id);
        $item->delete();
        Alert::success('Elimino', 'Se elimino correctamente');
        return redirect('/crud');
    }
}
