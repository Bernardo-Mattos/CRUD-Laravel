@extends('master')

@section('css')
    {{ url('/css/home.css') }}
@endsection

@section('content')
    <h1>Crud com laravel</h1>
    <form action="{{ route('users.create') }}" method="POST" class="formAdd">
        @csrf
        <input type="text" name="name" value="" placeholder="Nome" class="input">
        <input type="text" name="lastname" value="" placeholder="Sobrenome" class="input">
        <input type="text" name="cpf" value="" placeholder="cpf" class="input">
        <input type="number" name="idade" value="" placeholder="idade" class="input">

        <input type="submit" name="enviar" value="criar" />
    </form>


    <table class="customTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
                <th>Cpf</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }} </td>
                    <td>{{ $user->name }} </td>
                    <td>{{ $user->lastname }} </td>
                    <td>{{ $user->idade }} </td>
                    <td>{{ $user->cpf }} </td>
                    <td>
                        <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Excluir</button>
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-primary">Editar</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->idade }}</td>
            <td>{{ $user->cpf }}</td>
            <td>


            </td>
        </tr>
    @endforeach
    <div class="containerUsers">

    </div>
@endsection
