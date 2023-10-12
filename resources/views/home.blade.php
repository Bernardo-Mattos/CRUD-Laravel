@extends('master')

@section('css')
    {{ url('css/home.css') }}
@endsection
@section('content')
  <h2>Olá {{$name}} , você tem {{$age}} anos</h2>

  <button>Create user</button>
  <button>Read user</button>
  <button>Update user</button>
  <button>Delete user</button>
@endsection
