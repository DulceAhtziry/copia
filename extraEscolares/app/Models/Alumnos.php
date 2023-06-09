<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    public function carrera()
    {
        return $this->belongsTo(Carreras::class, 'id_carrera', 'id_carrera');
    }
}
