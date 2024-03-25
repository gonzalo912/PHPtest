@extends('layout')

@section('content')
    <div class="container">
        <form class="loginform" method="POST" action="{{ route('clients.update', $client->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="{{$client->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="password" class="form-control" id="email" name="email" placeholder="{{$client->email}}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Edad</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="{{$client->age}}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="{{$client->email}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Estado</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="{{$client->status}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Listo</button>
            <form action="{{route('clients.destroy', $client->id)}}">
                @csrf
                @method('DELETE')
            <button type="button" class="btn btn-warning">Eliminar cliente</button>
            </form>
        </form>
    </div>

@endsection