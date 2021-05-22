<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    //Relacion Equipos y Mantenimiento
    public function Mantenimientos() {
        return $this->hasMany(Mantenimientos::class);
    }

}
