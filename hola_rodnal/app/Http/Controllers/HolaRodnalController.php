<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaRodnalController extends Controller
{
    //
    public function saludo(){
        return view('vista_saludo',['msg' => 'Hola Mundo Chamacos']);
    }
}
