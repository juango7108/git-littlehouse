<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class logins extends Model
{
	use SoftDeletes;
    protected $primaryKey = 'id_login';  
   protected $fillable=['id_login','nombre_usuario','correo','password','nombre',
                       'tipo'];
					   protected $date=['deleted_at'];
}
