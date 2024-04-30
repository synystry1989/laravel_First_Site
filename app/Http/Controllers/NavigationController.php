<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contacto(){
        return view('site.contacto');
    }

    public function servicos(){

        return view('site.servicos');
    }
    public function galeria(){

        return view('site.galeria');
    }
}
