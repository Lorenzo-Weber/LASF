@extends('layouts.main')

@section('title', 'Financeiro')

@section('header')
    @include('headers.financeiro')
@endsection


@section('content')
    <div class="container mt-4">
        <h2>Financeiro</h2>
        <table class="table table-striped table-bordered">
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
                @foreach($financeiro as $f)
                    <tr>
                        <form action="{{ route('financeiroFinanceiro.update', $f->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @foreach($colunas as $coluna)
                                <td>
                                    @if($coluna == 'id' || $coluna == 'data')
                                        @if($coluna == 'data')
                                            {{ \Carbon\Carbon::parse($f->$coluna)->format('d/m/Y') }}
                                        @else
                                            {{ $f->$coluna }}    
                                        @endif
                                    @else
                                        <input 
                                            type="text" 
                                            name="{{ $coluna }}" 
                                            value="{{ $f->$coluna }}" 
                                            placeholder="{{ ucfirst($coluna) }}"
                                            class="input-table"
                                        >
                                    @endif
                                </td>
                            @endforeach
                            <td><button type="submit" class="btn btn-primary">Confirmar</button></td>
                        </form>
                        <td>
                            <form action="{{ route('financeiroFinanceiro.destroy', $f->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <form action="{{ route('financeiroFinanceiro.store') }}" method="POST">
                        @csrf
                        @foreach ($colunas as $coluna)
                            @if($coluna == 'id' || $coluna == 'data')
                                <td> </td>
                            @else
                                <td><input type="text" name="{{ $coluna }}" placeholder="{{ ucfirst($coluna) }}" class="input-table"></td>
                            @endif
                        @endforeach
                        <td><button type="submit" class="btn btn-success">Cadastrar</button></td>
                        <td> </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

