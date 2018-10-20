<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class entradas extends Model
{
	use SoftDeletes;
   protected $primaryKey = 'id_entrada';  
   protected $fillable=['id_entrada','fecha_entrada','proveedor','folio_factura','fecha_factura',
                       'id_usuario'];
					   protected $date=['deleted_at'];
}
