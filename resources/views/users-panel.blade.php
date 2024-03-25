@extends('panel-layout')

@section('panel')
    
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p>ID</p>
            </div>
            <div class="col-md-2">
                <p>Nombre</p>
            </div>
            <div class="col-md-2">
                <p>Email</p> 
            </div>
        </div>
        @foreach ($users as $user)
            <div class="row">
                <div class="col-md-2">
                    <p>{{$user->id}}</p>
                </div>
                <div class="col-md-2">
                    <p>{{$user->name}}</p>
                </div>
                <div class="col-md-2">
                    <p>{{$user->email}}</p> 
                </div>
            </div>
        @endforeach
    </div>
@endsection

