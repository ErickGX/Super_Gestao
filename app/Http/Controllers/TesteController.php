<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2){
         //echo "A soma de $p1 + $p2 é :".($p1+$p2);

         //return view('site.teste', ['p1' => $p1, 'p2' => $p2]);  //Array associativo 

          return view('site.teste', compact('p1', 'p2')); //metodo compact() utilziando o nomes das var como string

        //return view('site.teste')->with('var1', $p1)->with('var2', $p2);
    }

}
