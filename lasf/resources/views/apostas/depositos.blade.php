@extends('layouts.main')

@section('title', 'Depositos')

@section('header')
    @include('headers.apostas')
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Depositos</h2>
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        @foreach ($colunas as $coluna)
                            <th>{{ ucfirst($coluna) }}</th>
                        @endforeach
                        <th>Editar</th>
                        <th>Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($depositos as $deposito)
                        <tr>
                            <form action="{{ route('apostasDepositos.update', $deposito->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @foreach($colunas as $coluna)
                                    <td>
                                        @if($coluna == 'id' || $coluna == 'data')
                                            @if($coluna == 'data')
                                                {{ \Carbon\Carbon::parse($deposito->$coluna)->format('d/m/Y') }}
                                            @else
                                                {{ $deposito->$coluna }}
                                            @endif
                                        @else
                                            <input
                                                type="text"
                                                name="{{ $coluna }}"
                                                value="{{ $deposito->$coluna }}"
                                                placeholder="{{ ucfirst($coluna) }}"
                                                class="input-table form-control form-control-sm"
                                            >
                                        @endif
                                    </td>
                                @endforeach
                                <td><button type="submit" class="btn btn-primary btn-sm">Confirmar</button></td>
                            </form>
                            <td>
                                <form action="{{ route('apostasDepositos.destroy', $deposito->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <form action="{{ route('apostasDepositos.store') }}" method="POST">
                            @csrf
                            @foreach ($colunas as $coluna)
                                @if($coluna == 'id' || $coluna == 'data')
                                    <td> </td>
                                @else
                                    <td><input type="text" name="{{ $coluna }}" placeholder="{{ ucfirst($coluna) }}" class="input-table form-control form-control-sm"></td>
                                @endif
                            @endforeach
                            <td><button type="submit" class="btn btn-success btn-sm">Cadastrar</button></td>
                            <td> </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
