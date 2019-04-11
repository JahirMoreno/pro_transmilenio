<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruta;

class rutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas=ruta::orderBy('id','DESC')->paginate(10);
        return view('ruta.index',compact('rutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre'=>'required', 'estado'=>'required', 'longitud'=>'required', 'tipo_servicio'=>'required']);
        ruta::create($request->all());
        return redirect()->route('ruta.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutas=ruta::find($id);
        return  view('ruta.show',compact('rutas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruta=ruta::find($id);
        return view('ruta.edit',compact('ruta'));
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
        $this->validate($request,['nombre'=>'required', 'estado'=>'required', 'longitud'=>'required', 'tipo_servicio'=>'required']);
        ruta::find($id)->update($request->all());
        return redirect()->route('ruta.index')->with('updated','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ruta::find($id)->delete();
        return redirect()->route('ruta.index')->with('deleted','Registro eliminado satisfactoriamente');
    }
}
