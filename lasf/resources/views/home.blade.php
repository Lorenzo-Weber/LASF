@extends('layouts.main')

@section('title', 'HOME')

@section('header')
    @include('headers.home')
@endsection

@section('content')

<div class="center">
    <ul class="menu">
        <a href="/cadastrar/casa">Cadastrar Casa</a>
        <a href="/cadastrar/user">Cadastrar Usuario</a>
    </ul>
</div>

@endsection