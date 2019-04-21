<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\portal;

class portalController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portales=portal::orderBy('id','DESC')->paginate(10);
        return view('portal.index',compact('portales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required']);
        portal::create($request->all());
        return redirect()->route('portal.index')->with('success','Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portales=portal::find($id);
        return  view('portal.show',compact('portales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portal=portal::find($id);
        return view('portal.edit',compact('portal'));
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
        $this->validate($request,[ 'nombre'=>'required']);
        portal::find($id)->update($request->all());
        return redirect()->route('portal.index')->with('updated','Registro actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        portal::find($id)->delete();
        return redirect()->route('portal.index')->with('success','Registro eliminado correctamente.');
    }
}

