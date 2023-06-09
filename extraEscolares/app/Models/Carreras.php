<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;

    protected $table = 'carreras';

    public function alumnos()
    {
        return $this->hasMany(Alumnos::class, 'id_carrera');
    }
}
