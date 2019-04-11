<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\troncal;

class troncalController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troncales=troncal::orderBy('id','DESC')->paginate(10);
        return view('troncal.index',compact('troncales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('troncal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required', 'tipo_servicio'=>'required', 'origen'=>'required', 'destino'=>'required']);
        troncal::create($request->all());
        return redirect()->route('troncal.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $troncales=troncal::find($id);
        return  view('troncal.show',compact('troncales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $troncal=troncal::find($id);
        return view('troncal.edit',compact('troncal'));
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
        $this->validate($request,[ 'nombre'=>'required', 'tipo_servicio'=>'required', 'origen'=>'required', 'destino'=>'required']);
        troncal::find($id)->update($request->all());
        return redirect()->route('troncal.index')->with('updated','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        troncal::find($id)->delete();
        return redirect()->route('troncal.index')->with('deleted','Registro eliminado satisfactoriamente');
    }
}

