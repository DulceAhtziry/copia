<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;
    protected $table = 'archivos';
    public function credito()
    {
        return $this->belongsTo(Creditos::class, 'id_credito', 'id_credito');
    }
}

