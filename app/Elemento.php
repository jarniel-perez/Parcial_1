<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{

protected $table = 'elementos';

  protected $fillable = [
    'nombre',
    'serie',
    'ciudad_origen',
    'caracteristicas',
    'automovil_id'
  ];

    protected $hidden = ['created_at','update_at'];

    protected $casts = [
      'caracteristicas' => 'array'
    ];

  public function automovil(){
    return $this->belongsTo('App\Automovil','automovil_id');
  }

  public function setNombreAttribute($value){
    $this->attributes['nombre']=strtoupper($value);
  }
}
