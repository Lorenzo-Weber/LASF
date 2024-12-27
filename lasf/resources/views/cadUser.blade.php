@extends('layouts.main')

@section('title', "Cadastrar Usuario")

@section('header')
    @include('headers.home')
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Usuarios</h2>
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
                @foreach($user as $u)
                    <tr>
                        <form action="{{ route('user.update', $u->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @foreach($colunas as $coluna)
                                <td>
                                    @if($coluna == 'id' || $coluna == 'data')
                                        @if($coluna == 'data')
                                            {{ \Carbon\Carbon::parse($u->$coluna)->format('d/m/Y') }}
                                        @else
                                            {{ $u->$coluna }}    
                                        @endif
                                    @else
                                        <input 
                                            type="text" 
                                            name="{{ $coluna }}" 
                                            value="{{ $u->$coluna }}" 
                                            placeholder="{{ ucfirst($coluna) }}"
                                            class="input-table"
                                        >
                                    @endif
                                </td>
                            @endforeach
                            <td><button type="submit" class="btn btn-primary">Confirmar</button></td>
                        </form>
                        <td>
                            <form action="{{ route('user.destroy', $u->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <form action="{{ route('user.store') }}" method="POST">
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