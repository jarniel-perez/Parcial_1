<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concesionario extends Model
{

  protected $table = 'concesionarios';

  protected $fillable = [
    'nombre',
    'ciudad',
    'direccion',
    'telefono',
    'email'
  ];


    protected $hidden = ['created_at','update_at'];

    protected $appends = ['full_nombre'];

  public function automovils(){
    return $this->hasMany('App\Automovil', 'concesionario_id');
  }

  public function getfullNombreAttribute()
  {
    return "{$this->id}--{$this->nombre}";
  }

}
