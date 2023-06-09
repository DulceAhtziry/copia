<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    use HasFactory;
    protected $table = 'credito';
    public function archivo()
    {
        return $this->hasMany(Archivo::class, 'id_archivos');
    }
}
