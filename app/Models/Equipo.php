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

    public function dias(){
        $fecha1 = date_create($this->fechamantenimiento);
        $fecha2 = date_create($this->proximomantenimiento);
        $dias = date_diff($fecha1, $fecha2)->format('%a');
        return $dias;
    }

    public function diaspas(){
        $fecha1 = date_create($this->fechamantenimiento);
        $fecha2 = date_create(date('y-m-d'));    
        $dias = date_diff($fecha1, $fecha2)->format('%a');
        return $dias;
    }

    public function porcentaje(){
      $porcentaje;
      
        try {
            if($this->dias() == 0){
                $porcentaje = 1;
            }else{
                $porcentaje = (100 * $this->diaspas()) / $this->dias() ;
            }          
        } catch (Exception $e) {
           $porcentaje = 1;
        }

    return $porcentaje;
    }

}
