@extends('master')

@section('content')
<form action="{{route('users.update', $user->id)}}" method="POST">
    @csrf
    <input type="text" name="name" value="">
    <input type="text" name="lastname" value="">
    <input type="submit" name="enviar" value="submit"/>
  </form>

@endsection
