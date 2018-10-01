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

    public function historia(){
        return view ('web.historias.historia');
    }
    public function blog(){
        return view ('web.blogs.blog-01');
    }
    public function galeria(){
        return view ('web.galerias.galeria');
    }
    public function FAQS(){
        return view ('web.FAQS.respuestas');
    }
    public function costumbre(){
        return view ('web.costumbres.costumbre');
    }
    public function lugares(){
        return view ('web.lugares.caminos');
    }
    public function mapa(){
        return view ('web.mapas.mapa');
    }
    public function blogVista(){
        return view ('web.blogs.blog-vista');
    }
  
}
