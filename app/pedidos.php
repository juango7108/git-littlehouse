<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pedidos extends Model
{
	use SoftDeletes;
     protected $primaryKey = 'id_pedido';  
   protected $fillable=['id_pedido','direccion','fecha_pedido','fecha_entrega',
                       'id_cliente','id_usuario'];
					   protected $date=['deleted_at'];
}
