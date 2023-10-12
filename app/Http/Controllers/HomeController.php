<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Bernardo',
                'birth' => '29/01/90',
                'age' => 50
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Pedro',
                'birth' => '10/11/1933',
                'age' => 90
            ],

            [
                'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'name' => 'Daniel',
                'birth' => '01/01/2020',
                'age' => 2
            ]
        ];

        $dados['pessoas'] = $pessoas;
        return view('home', $dados);

    }

    public function desafios(){
        $numero = 1;
        $url = 'https://i.pravatar.cc/150?img='.$numero;
        $dados['url'] = $url;
    //    dd($dados);
       return view('desafios' , $dados);
    }
}
