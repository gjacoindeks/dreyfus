<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'Fotos';
    protected $fillable = ['id','nombre','descripcion','ruta','album_id'];


    public function album(){

    		return $this->belongsTo('dreyfus\Album');

    }
}
