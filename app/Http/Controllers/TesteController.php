<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        //echo "A some de $p1 + $p2 é: ".($p1+$p2);
        //return view('site.Teste', ['p1'=> $p1, 'p2' => $p2]); //Array Associativo
        //return view('site.Teste', compact('p1', 'p2')); //Compact
        return view('site.Teste')->with('xyz',$p1)->with('zzz',$p2); //with
    }
}
