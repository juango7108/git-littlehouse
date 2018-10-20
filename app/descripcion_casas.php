<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class descripcion_casas extends Model
{
	use SoftDeletes;
     protected $primaryKey = 'id_casa';  
   protected $fillable=['id_casa','dimenciones','color','descripcion','archivo'];
   protected $date=['deleted_at'];
}
