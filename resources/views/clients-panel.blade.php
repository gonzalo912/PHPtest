@extends('panel-layout')

@section('panel')
    <a href="create">Agregar cliente</a>
    <div class="container" style="display: grid; grid-template-rows: auto auto;">
        <div class="row text-center">
            <div class="col">
                <p>Nombre</p>
            </div>
            <div class="col">
                <p>Email</p> 
            </div>
            <div class="col">
                <p>Edad</p> 
            </div>
            <div class="col">
                <p>Teléfono</p> 
            </div>
            <div class="col">
                <p>Estado</p> 
            </div>
        </div>
        @foreach ($clients as $client)
        <div class="row text-center">
            <div class="col">
                <p>{{$client->name}}</p>
            </div>
            <div class="col">
                <p>{{$client->email}}</p> 
            </div>
            <div class="col">
                <p>{{$client->age}}</p> 
            </div>
            <div class="col">
                <p>{{$client->phone}}</p>
            </div>
            <div class="col">
                <p>{{$client->status}}</p>
            </div>
            <div class="col">
                <a href="{{ route('clients.edit', ['client' => $client]) }}">Editar</a>
            </div>
        </div>
        @endforeach
        {{ $clients->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
    </div>
@endsection


