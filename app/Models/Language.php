<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
       //la tabla a conectar 
       protected $table = "languages"; 
       //la clave primaria 
       protected $primaryKey = "language_id";
       //omitir campos de auditoria 
       public $timestamps = false;
    use HasFactory;
    //m:m language country 
    public function paises(){
        return $this->belongsTomany(country::class, "country_languages", "language_id","country_id");
    }
}
