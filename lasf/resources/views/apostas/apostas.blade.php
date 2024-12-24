@extends('layouts.main')

@section('title', 'Apostas')

@section('header')
    @include('headers.apostas')
@endsection

@section('content')
    <div class="margin-1 center-h">
        <h1>Apostas</h1>
        <table>
            <thead>
                <tr>
                    <th>Casa</th>
                    <th>Conta</th>
                    <th>Aposta</th>
                    <th>Resultado</th>
                    <th>Retorno</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop para exibir os registros existentes -->
                @foreach ($apostas as $dado)
                <tr>
                    <td>{{ $dado->casa }}</td>
                    <td>{{ $dado->conta }}</td>
                    <td>{{ $dado->aposta }}</td>
                    <td>{{ $dado->resultado }}</td>
                    <td>{{ $dado->retorno }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" onclick="editar({{ $dado->id }})">Editar</button>
                    </td>
                    <td>
                        {{-- <form method="POST" action="{{ route('apostas.remover', $dado->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach 

                <!-- Linha para adicionar um novo registro -->
                <tr>
                    {{-- <form method="POST" action="{{ route('apostas.inserir') }}">
                        @csrf
                        <td><input type="text" name="casa" class="form-control" required></td>
                        <td><input type="text" name="conta" class="form-control" required></td>
                        <td><input type="text" name="aposta" class="form-control" required></td>
                        <td><input type="text" name="resultado" class="form-control" required></td>
                        <td><input type="text" name="retorno" class="form-control" required></td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success btn-sm">Inserir</button>
                        </td>
                    </form> --}}
                </tr>
            </tbody>
        </table>
    </div>
@endsection
