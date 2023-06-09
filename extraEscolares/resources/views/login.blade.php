@extends('layouts/precentacion')
@section('contenido')
    
    <div class="login-box">
        <img src="{{ asset('img/logo.png') }}" alt="" style="width: 300px; height: auto;">
        <form action="{{ route('logear') }}" method="post">
            @csrf 
            @method('POST')
            <div class="user-box">
                <input type="text" required="" name="name">
                <label for=""><td class="icocod">&#128100;</td> Usuario</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label for=""><td class="icocod">&#128274;</td> Password</label>
                
            </div>
            <div class="center-button">
                <button class="btn btn-outline">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Logear
                </button>
        </form>
    </div>
            
    
@endsection
