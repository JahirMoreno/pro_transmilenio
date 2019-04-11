<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class troncal extends Model
{
    public $table = "troncal";
	public $timestamps = false;
    protected $fillable = ['nombre', 'tipo_servicio', 'origen', 'destino'];
}
