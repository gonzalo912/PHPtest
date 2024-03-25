@extends('layout')

@section('title', 'LOGIN')

@section('content')
    <div class="container">
        <form class="loginform" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="user">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
        <a href="/register">No tenés cuenta? Registrate</a>
        @if($errors->has('login_error'))
            <div class="alert alert-danger">
                {{ $errors->first('login_error') }}
            </div>
        @endif
    </div>



@endsection
