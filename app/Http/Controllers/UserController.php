<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $req)
    {
        $user = $req->only('name', 'lastname', 'idade', 'cpf');
        User::create($user);
        return view('home');
    }
}
