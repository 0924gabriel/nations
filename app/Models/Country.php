<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
      //la tabla a conectar 
      protected $table = "countries"; 
      //la clave primaria 
      protected $primaryKey = "country_id";
      //omitir campos de auditoria 
      public $timestamps = false;
    use HasFactory;
    //many to many country and language
    public function languages(){
      //belongstomany method
      //1.related model 
      //2.  pivot table (intermediate table)
      //3. foreign key of current model 
      //4. foreign key of related model 
      return $this->belongsTomany(language::class, "country_languages", "country_id", "language_id");
    }
    //m:1 country . region
    //relationship
    public function regions(){
      
      return $this->belongsTo(region::class, "region_id");
    }
}
