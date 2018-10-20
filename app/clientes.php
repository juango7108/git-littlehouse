<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
{
	use SoftDeletes;
   protected $primaryKey = 'id_cliente';  
   protected $fillable=['id_cliente','nombre','apellidos','direccion','tel',
                       'correo','activo'];
protected $date=['deleted_at'];
}
