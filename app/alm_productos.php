<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alm_productos extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id_producto';  
   protected $fillable=['id_producto','producto','cantidad_minima','costo','costo_promedio',
                       'existencia_actual'];
					   
					   protected $date=['deleted_at'];
}
