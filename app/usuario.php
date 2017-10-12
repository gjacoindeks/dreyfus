<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
   protected $table = 'usuarios';
   protected $fillable = ['id','nombre','correo','contrasena','pregunta','respuesta'];
   protected $hidden = ['contrasena','remember_token'];
}
