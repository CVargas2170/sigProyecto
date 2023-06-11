<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
   // use HasFactory;
   protected $table = "edificios";
   protected $fillable =['descripcion','codEdif','longitud','latitud','grupo','sigla'];
   //para no tomar en cuenta los atributos
   protected $hidden = [
      'created_at',
      'updated_at'
  ];

}
