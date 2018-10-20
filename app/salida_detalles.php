<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salida_detalles extends Model
{
   protected $primaryKey = 'id_salidadadet';  
   protected $fillable=['id_salidadadet','cantidad','id_salida',
                       'id_producto'];
}
