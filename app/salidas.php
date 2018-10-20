<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class salidas extends Model
{
	use SoftDeletes;
   protected $primaryKey = 'id_salida';  
   protected $fillable=['id_salida','fecha_salida','responsable',
                       'id_usuario'];
					   protected $date=['deleted_at'];
}
