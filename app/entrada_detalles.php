<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrada_detalles extends Model
{
    protected $primaryKey = 'id_entradadet';  
   protected $fillable=['id_entradadet','cantidad','precio_compra','id_entrada',
                       'id_producto'];
}
