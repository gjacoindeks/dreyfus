<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albumes';
    protected $fillable = ['id','nombre','descripcion','usuario_id'];

    

    public function fotos(){

    	return $this->hasMany('dreyfus\Foto');
    }

    public function usuario(){

    	return $this->belongsTo('dreyfus\usuario');

    }
}
