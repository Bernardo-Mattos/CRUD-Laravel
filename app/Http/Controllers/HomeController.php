<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nome = 'Bernardo';
        $idade = 17;

        $data = [
            'name' => $nome,
            'age' => $idade,
        ];

        return view('home' , $data);
    }
}
