<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
	use SoftDeletes;
     protected $primaryKey = 'id_usuario';  
   protected $fillable=['id_usuario','nombre_usuario','nombre','activo',
                       'reporte','archivo'];
protected $date=['deleted_at'];
					   
}
