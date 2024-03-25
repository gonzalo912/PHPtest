@extends('layout')

@section('title', 'REGISTRO')

@section('content')

    <div class="container">
      <form class="loginform" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
          <label for="user" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="user" name="user">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Registrarme</button>
      </form>

      @if (Session::has('token'))
        <div>
          <h1>Tu contraseña, no la olvides: {{ Session::get('token') }}</h1>
        </div>
      @endif
    </div>

@endsection
