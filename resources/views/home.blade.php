@extends('master')

@section('css')
    {{ url('/css/home.css') }}
@endsection

@section('content')
    <div class="conteudo flex-column">
        <h1>Crud com laravel</h1>
        <form action="{{ route('users.create') }}" method="POST" class="flex formulario" >
            @csrf
            {{-- name --}}
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                </div>
                <input type="text" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            {{-- lastname --}}
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Sobrenome</span>
                </div>
                <input type="text" name="lastname" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            {{-- age --}}
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Idade</span>
                </div>
                <input type="text" name="idade" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            {{-- cpf --}}
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Cpf</span>
                </div>
                <input type="text" name="cpf" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>

            <button class="btn btn-outline-success" type="submit" name="enviar">criar</button>
        </form>


        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="align-middle">{{ $user->id }} </td>
                        <td class="align-middle">{{ $user->name }} </td>
                        <td class="align-middle">{{ $user->lastname }} </td>
                        <td class="align-middle">{{ $user->idade }} </td>
                        <td class="align-middle">{{ $user->cpf }} </td>
                        <td class="align-middle" style="display: flex; gap: 10px">
                            <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE') <!-- Defina o método como DELETE -->
                                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                            </form>
                            <button class="btn btn-outline-warning" data-toggle="modal"
                                data-target="#editModal{{ $user->id }}">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @foreach ($users as $user)
            <!-- Linhas de exibição de usuário aqui -->

            <!-- Modal de edição para o usuário -->
            <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog"
                aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel{{ $user->id }}">Editar Usuário</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Sobrenome</label>
                                    <input type="text" class="form-control" name="lastname"
                                        value="{{ $user->lastname }}">
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade</label>
                                    <input type="number" class="form-control" name="idade" value="{{ $user->idade }}">
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" name="cpf" value="{{ $user->cpf }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
