<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\portal;
use App\troncal;
use App\ruta;

class cargardatosController extends Controller
{
	public function cargarTroncales(Request $request){
		$path = $request->file('archivoTroncales')->getRealPath();
		Excel::load($path, function($reader) {
    		foreach ($reader->get() as $troncal) {
    			troncal::create([
    				'nombre' => $troncal->nombre,
    				'tipo_servicio' => $troncal->tipo_servicio,
    				'origen' => $troncal->origen,
    				'destino' => $troncal->destino
    			]);
    		}
    	});
    	return redirect('carga')->with('success','Datos cargados correctamente.');
	}

	public function cargarRutas(Request $request){
		$path = $request->file('archivoRutas')->getRealPath();
		Excel::load($path, function($reader) {
    		foreach ($reader->get() as $ruta) {
    			ruta::create([
    				'nombre' => $ruta->nombre,
    				'estado' => $ruta->estado,
    				'longitud' => $ruta->longitud,
    				'tipo_servicio' => $ruta->tipo_servicio
    			]);
    		}
    	});
    	return redirect('carga')->with('success','Datos cargados correctamente.');
	}

	public function cargarPortales(Request $request){
		$path = $request->file('archivoPortales')->getRealPath();
		Excel::load($path, function($reader) {
    		foreach ($reader->get() as $portal) {
    			portal::create([
    				'nombre' => $portal->nombre
    			]);
    		}
    	});
    	return redirect('carga')->with('success','Datos cargados correctamente.');
	}
}
