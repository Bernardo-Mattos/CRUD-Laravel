@extends('master')

@section('css')
    {{ url('/css/address.css') }}
@endsection

@section('content')
    <form action="{{ route('address.save') }}" method="post">
        @include('address._form')
        <button class="btn btn-outline-success" type="submit">Criar</button>
    </form>

@endsection
