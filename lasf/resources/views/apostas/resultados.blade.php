@extends('layouts.main')

@section('title', 'Resultados')

@section('header')
    @include('headers.apostas')
@endsection

@section('content')
<div class="container mt-4">
    <h2>Resultados</h2>
    <table class="table table-striped table-boarded">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                @foreach ($colunas as $coluna)
                    <th>{{ ucfirst($coluna) }}</th>
                @endforeach
            </tr>
        </thead>
    </table>
</div>
@endsection