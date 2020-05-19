@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/connect.css')}}">
    
    <div class="connect-container">
        <div class="titleconnect">Connectez - vous</div>
        <form method="POST" action="{{url('post-login')}}">
            {{ csrf_field() }}
            <div class="login-container">
                <div class="username">
                    <input class="connect-text" type="email" name="email" placeholder="Adresse Email">
                    @if ($errors->has('email'))
                        <br><span class="error">{{ $errors->first('email') }}</span>
                    @endif 
                </div>

                <div class="password">
                    <input class="connect-text" type="password" name="password" placeholder="Mot de passe">
                    @if ($errors->has('password'))
                        <br><span class="error">{{ $errors->first('password') }}</span>
                    @endif  
                </div>
                <div class="submit"><button class="connect-submit" type="submit">Log In</button></div>
                <div class="signup"><label>Vous n'avez pas de compte - <a href="/signup">Inscrivez-vous</a></label></div>
            </div>
        </form>
    </div>

@endsection