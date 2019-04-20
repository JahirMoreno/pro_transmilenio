<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use Illuminate\Http\Request;
use DB;


class reportesController extends Controller
{

	public function estacionTroncal()
	{
		$troncal =DB::table('troncal')
				->select(
					DB::raw('nombre as ntroncal'),
					DB::raw('count(nombre) as cantidad'))
				->groupBy(DB::raw('nombre'))
				->get();
		$array[] = ['Nombre', 'Cantidad'];

		foreach ($troncal as $key => $value) {
			$array[++$key] = [$value->ntroncal, (int)$value->cantidad];
		}
		return view ('reportes')->with('troncal', json_encode($array));

	}

}
