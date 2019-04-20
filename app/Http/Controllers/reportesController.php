<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use Illuminate\Http\Request;
use DB;


class reportesController extends Controller
{

	public function estacionTroncal()
	{
		$troncal =DB::table('estacion')
				->select(
					DB::raw('troncal.nombre as ntroncal'),
					DB::raw('count(estacion.id_troncal) as cantidad'))
				->join('troncal', 'troncal.id', '=', 'estacion.id_troncal')
				->groupBy(DB::raw('troncal.nombre'))
				->get();
		$array[] = ['Nombre', 'Cantidad'];

		foreach ($troncal as $key => $value) {
			$array[++$key] = [$value->ntroncal, (int)$value->cantidad];
		}
		return view ('reportes')->with('troncal', json_encode($array));

	}

	public function rutaEstado()
	{
		$ruta = DB::table('ruta')
				->select(
					DB::raw('ruta.estado as nestado'),
					DB::raw('count(ruta.estado) as cantidad'))
				->groupBy(DB::raw('ruta.estado'))
				->get();
		$array[] = ['Nombre', 'Cantidad'];

		foreach ($ruta as $key => $value) {
			$array[++$key] = [$value->nestado, (int)$value->cantidad];
		}
		return view ('reportesrutas')->with('ruta', json_encode($array));
	}

	public function rutaHorario()
	{
		$horario = DB::table('ruta')
				->select(
					DB::raw('horario.hora_inicio as hinicio'),
					DB::raw('count(horario.id) as cantidad'))
				->join('ruta_horario', 'ruta_horario.id_ruta', '=', 'ruta.id')
				->join('horario', 'horario.id', '=', 'ruta_horario.id_horario')
				->groupBy(DB::raw('horario.hora_inicio'))
				->get();
		$array[] = ['Nombre', 'Cantidad'];

		foreach ($horario as $key => $value) {
			$array[++$key] = [$value->hinicio, (int)$value->cantidad];
		}
		return view ('reporteshorarios')->with('horario', json_encode($array));
	}

}
