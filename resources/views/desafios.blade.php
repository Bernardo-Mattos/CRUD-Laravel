@extends('master')

@section('content')
<h1>Segundo desafio</h1>
<div class="container">
    @for ($numero = 1; $numero <= 50; $numero++)
        <img src="{{ $url . $numero}}">
    @endfor
</div>
@endsection
