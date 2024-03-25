@extends('layout')

@section('title', 'PANEL')

@section('content')
    <div class="container">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="container panel">
                        <h1>CRM</h1>
                        <a href="/panel/users">Usuarios</a><br>
                        <a href="/panel/clients ">Clientes</a>
                    </div>
                </div>
                <div class="col-11">
                    <div class="row container usuario">
                        @if(Auth::check())
                        <h1>{{ Auth::user()->name }}</h1>
                        @endif
                        
                    </div>
                    <div class="row container listado">
                        @yield('panel');
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection