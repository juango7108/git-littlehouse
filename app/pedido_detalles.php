<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido_detalles extends Model
{
     protected $primaryKey = 'id_pedidodet';  
   protected $fillable=['id_casa','precio','tamaño','descripcion','id_pedido','id_casa'];
}
