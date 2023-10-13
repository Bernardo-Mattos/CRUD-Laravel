<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('home', ['users' => $users]);
    }
    public function create(Request $req)
    {
        $users = $req->only('id', 'name', 'lastname', 'idade', 'cpf');
        User::create($users);
        return view('home' , ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', ['user' => $user]);
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
