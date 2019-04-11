<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portal extends Model
{
    public $table = "portal";
	public $timestamps = false;
    protected $fillable = ['nombre'];
}
