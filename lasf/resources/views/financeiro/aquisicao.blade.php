@extends('layouts.main')

@section('title', 'Aquisição de Contas')

@section('header')
    @include('headers.financeiro')
@endsection

@section('content')
<div class="container mt-4">
    <h2>Aquisicao</h2>
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