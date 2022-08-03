<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a conectar 
    protected $table = "continents"; 
    //la clave primaria 
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria 
    public $timestamps = false;
    use HasFactory;

    //metodo de relacion entre continente y sus relaciones 
    public function regiones(){
        //parameters
        //1. linked model 
        //2. foreign key of current model 
        //  into realated model region 
        return $this->hasmany(region::class,
                                    "continent_id");
    }
}
