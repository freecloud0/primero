<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function vitis(){
        return view ('web.home');
    }

    public function gestion(){
        return view ('web.gestion');
    }

    public function hospedaje(){
        return view ('web.entretenimiento.hospedaje');
    }

    public function comida(){
        return view ('web.entretenimiento.comida');
    }

    public function productos(){
        return view ('web.entretenimiento.productos');
    }

}
