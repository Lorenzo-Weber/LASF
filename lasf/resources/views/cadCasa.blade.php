@extends('layouts.main')

@section('title', "Cadastrar Casa")

@section('header')
    @include('headers.home')
@endsection

@section('content')
    <div class="container mt-4">
        <h2>Casas</h2>
        <table class="table table-striped table-boarded">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    @foreach ($colunas as $coluna)
                        <th>{{ ucfirst($coluna) }}</th>
                    @endforeach
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>-</th>
                    <form action="" method="POST">
                        @csrf
                        @foreach ($colunas as $coluna)
                            <td><input type="text" name="{{$coluna}}" placeholder="{{ucfirst($coluna)}}"></td>
                        @endforeach
                        <td><button type="submit">Cadastrar</button></td>
                </form>
                </tr>
            </tbody>
            
            
        </table>
    </div>
@endsection