@extends('master')

@section('content')


  <h2>Users</h2>

  <form action="{{route('users.create')}}" method="POST">
    @csrf
    <input type="text" name="name" value="">
    <input type="text" name="lastname" value="">
    <input type="text" name="cpf" value="">
    <input type="number" name="idade" value="">

    <input type="submit" name="enviar" value="submit"/>
  </form>

  @foreach ($users as $user)

    <h2> {{ $user->id }} </h2>
    <h2> {{ $user->name }} </h2>
    <h2> {{ $user->lastname }} </h2>
    <h2> {{ $user->idade }} </h2>
    <h2> {{ $user->cpf }} </h2>
    <a href="{{ route('users.edit', $user->id) }}">editar</a>
    <hr>
  @endforeach

@endsection
