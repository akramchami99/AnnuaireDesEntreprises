@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/connect.css')}}">
    
    <div class="connect-container">
        <div class="titleconnect">Connectez - vous</div>
        <div class="login-container">
            <div class="username"><input class="connect-text" type="text" placeholder="Username"></div>
            <div class="password"><input class="connect-text" type="text" placeholder="Mot de passe"></div>
            <div class="submit"><input class="connect-submit" type="submit" value="Log In"></div>
            <div class="signup"><label>Vous n'avez pas de compte - <a href="#">Inscrivez-vous</a></label></div>
          </div>
    </div>
    
@endsection