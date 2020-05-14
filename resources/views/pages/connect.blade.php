@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/connect.css')}}">
    
    <div class="connect-container">
        <div class="titleconnect">Connectez - vous</div>
        <form method="post" action="#">
            <div class="login-container">
                @csrf        
                <div class="username"><input class="connect-text" type="text" placeholder="Username"></div>
                <div class="password"><input class="connect-text" type="text" placeholder="Mot de passe"></div>
                <div class="submit"><button class="connect-submit" type="submit">Log In</button></div>
                <div class="signup"><label>Vous n'avez pas de compte - <a href="/signup">Inscrivez-vous</a></label></div>
            </div>
        </form>
    </div>
    
    
@endsection