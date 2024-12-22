@extends('layouts.main')

@section('title', 'LASF - Login')

@section('header')
    @include('headers.home')
@endsection

@section('content') 
    <div class="center">
        <form action="/login" method="POST" class="login-container">
            @csrf
            <input type="text" name="text" placeholder="User">
            <input type="password" name="password" placeholder="Senha">
            <button type="submit">Entrar</button>
        </form>
    </div>

@endsection
