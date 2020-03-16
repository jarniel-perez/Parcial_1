<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Concesionario;
use App\Automovil;
use App\Elemento;

class ConsultaController extends Controller
{
    public function consulta(){
      $concesionarios = Concesionario::find(28);
      $concesionario = $concesionarios->full_nombre;
      return ($concesionario);
    }

    public function consulta2(){
      $automovil = Automovil::find(25);
      $automovill = $automovil->compra_auto;
      return ($automovill);

    }

    public function consulta3(){
      $elemento = Elemento::find(30);
      return ($elemento);

    }
}
