<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('home', ['users' => $users]);
    }
    public function create(Request $req)
    {
        $userData = $req->only('name', 'lastname', 'idade', 'cpf');
        $user = User::create($userData);
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('home', ['users' => $users]);
    }
    public function update(Request $req, $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->name = $req->input('name');
            $user->lastname = $req->input('lastname');
            $user->idade = $req->input('idade');
            $user->cpf = $req->input('cpf');
            $user->save();
        }

        return redirect()->route('home');
    }
    public function delete($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
        }

        return redirect()->route('home');
    }
}
