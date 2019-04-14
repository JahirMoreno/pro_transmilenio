<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Faker\Factory as Faker;

class generadorController extends Controller
{
	public function generarTroncales(Request $request) {
    	$cantidad = $request->input('cantidadTroncales');
    	Excel::create('troncales', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$faker = Faker::create();
    			$sheet->row(1, ['nombre', 'letra', 'id_color', 'longitud', 'estado']);
    			while ($contador <= $cantidad+1) {
    				$nombreTroncal = $faker->firstNameMale;
    				$letraTroncal = $faker->randomLetter;
    				$colorTroncal = $faker->numberBetween(1,5);
    				$longitud = $faker->numberBetween(10,30);
    				$estado = $faker->numberBetween(0,1);
    				$sheet->row($contador, [$nombreTroncal, strtoupper($letraTroncal), $colorTroncal, $longitud, $estado]);
    				$contador = $contador + 1;
    			}
    		});
    	})->export('csv');
    }

    public function generarRutas(Request $request) {
    	$cantidad = $request->input('cantidadRutas');
    	Excel::create('rutas', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$faker = Faker::create();
    			$sheet->row(1, ['nombre', 'letra', 'id_color', 'longitud', 'estado']);
    			while ($contador <= $cantidad+1) {
    				$nombreTroncal = $faker->firstNameMale;
    				$letraTroncal = $faker->randomLetter;
    				$colorTroncal = $faker->numberBetween(1,5);
    				$longitud = $faker->numberBetween(10,30);
    				$estado = $faker->numberBetween(0,1);
    				$sheet->row($contador, [$nombreTroncal, strtoupper($letraTroncal), $colorTroncal, $longitud, $estado]);
    				$contador = $contador + 1;
    			}
    		});
    	})->export('csv');
    }

    public function generarPortales(Request $request) {
    	$cantidad = $request->input('cantidadPortales');
    	Excel::create('portales', function($excel) use ($cantidad) {
    		$excel->sheet('Troncales', function($sheet) use ($cantidad) {
    			$contador = 2;
    			$faker = Faker::create();
    			$sheet->row(1, ['nombre', 'letra', 'id_color', 'longitud', 'estado']);
    			while ($contador <= $cantidad+1) {
    				$nombreTroncal = $faker->firstNameMale;
    				$letraTroncal = $faker->randomLetter;
    				$colorTroncal = $faker->numberBetween(1,5);
    				$longitud = $faker->numberBetween(10,30);
    				$estado = $faker->numberBetween(0,1);
    				$sheet->row($contador, [$nombreTroncal, strtoupper($letraTroncal), $colorTroncal, $longitud, $estado]);
    				$contador = $contador + 1;
    			}
    		});
    	})->export('csv');
    }
}
