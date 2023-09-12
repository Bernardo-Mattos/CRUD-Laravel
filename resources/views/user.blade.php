@extends('master')

@section('content')
  <h2> {{ $user->name }} </h2>
  <h2> {{ $user->lastname }} </h2>
  <h2> {{ $user->idade }} </h2>
  <h2> {{ $user->cpf }} </h2>
@endsection
