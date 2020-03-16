<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
protected $table = 'automovils';

  protected $fillable = [
    'marca',
    'modelo',
    'tipo',
    'ciudad_origen',
    'matricula',
    'en_venta',
    'concesionario_id'
  ];

  protected $casts = [
    'en_venta' => 'boolean'
  ];

  protected $hidden = ['created_at','update_at'];



    public function concesionario(){
      return $this->belongsTo('App\Concesionario','concesionario_id');
    }

    public function elementos(){
      return $this->hasMany('App\Elemento', 'automovil_id');
    }

    public function getCompraAutoAttribute(){
      return $this->concesionario;
    }

    protected $appends = ['compra_auto'];
}
