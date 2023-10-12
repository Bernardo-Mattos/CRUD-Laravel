@extends('master')

@section('content')
    <h1>Desafio 1</h1>
    <div style="display: flex; gap: 10px;">

    </div>

    <h1>Desafio 2</h1>
    <div class="desafio2">
        @foreach ($pessoas as $pessoa )
            @component('components.card')
                @slot('image')
                    {{$pessoa['image']}}
                @endslot
                @slot('name')
                    {{$pessoa['name']}}
                @endslot
                @slot('age')
                    {{$pessoa['age']}}
                @endslot
                @slot('birth')
                    {{$pessoa['birth']}}
                @endslot
            @endcomponent
        @endforeach
    </div>
@endsection
