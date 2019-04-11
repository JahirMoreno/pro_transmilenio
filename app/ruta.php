<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
	public $table = "ruta";
	public $timestamps = false;
    protected $fillable = ['nombre', 'estado', 'longitud', 'tipo_servicio'];
}
