<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class generadorController extends Controller
{
	public function generarTroncales(Request $request) {
    	$cantidad = $request->input('cantidadTroncales');
    	Excel::create('datos_troncales', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$sheet->row(1, ['nombre', 'tipo_servicio', 'origen', 'destino']);
    			$tipo_servicio = ['ALIMENTADOR','DUAL','TRONCAL'];
    			while ($contador <= $cantidad+1) {
    				$nombre = "TRONCAL ".($contador-1);
    				$t_servicio = $tipo_servicio[mt_rand(0,2)];
    				$origen = "ORIGEN ".($contador-1);
    				$destino = "DESTINO ".($contador-1);
    				$sheet->row($contador, [$nombre, $t_servicio, $origen, $destino]);
    				$contador++;
    			}
    		});
    	})->export('csv');
    }

    public function generarRutas(Request $request) {
    	$cantidad = $request->input('cantidadRutas');
    	Excel::create('datos_rutas', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$sheet->row(1, ['nombre', 'estado', 'longitud', 'tipo_servicio']);
    			$ruta = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'];
    			$est = ['COMPLEMENTARIA', 'ALIMENTADOR', 'URBANA'];
    			$t_servicio = ['NOCTURNO', 'DIURNO', 'DIURNO_PICO', 'DIURNO_PICO_AM'];
    			while ($contador <= $cantidad+1) {
    				$nombre = "RUTA ".$ruta[mt_rand(0,11)].mt_rand(10,99);
    				$estado = $est[mt_rand(0,2)];
    				$longitud = mt_rand(10, 45);
    				$tipo_servicio = $t_servicio[mt_rand(0,3)];
    				$sheet->row($contador, [$nombre, $estado, $longitud, $tipo_servicio]);
    				$contador++;
    			}
    		});
    	})->export('csv');
    }

    public function generarPortales(Request $request) {
    	$cantidad = $request->input('cantidadPortales');
    	Excel::create('datos_portales', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$sheet->row(1, ['nombre']);
    			$portal = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'];
    			while ($contador <= $cantidad+1) {
    				$nombre = "PORTAL ".$portal[mt_rand(0,11)].($contador-1);
    				$sheet->row($contador, [$nombre]);
    				$contador++;
    			}
    		});
    	})->export('csv');
    }
}
