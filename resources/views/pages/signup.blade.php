@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    <div class="titlesignup">Inscrivez - vous</div>
    <form method="post" action="#">
        <div class="signup-form">
            <div class="prenom-signup"><input class="signup-text" type="text" placeholder="Prenom"></div>
            <div class="nom-signup"><input class="signup-text" type="text" placeholder="Nom"></div>
            <div class="email-signup"><input class="signup-text" type="text" placeholder="Email"> </div>
            <div class="emconf-signup"><input class="signup-text" type="text" placeholder="Confirmation Email"></div>
            <div class="pass-signup"><input class="signup-text" type="password" placeholder="Password"> </div>
            <div class="passconf-signup"><input class="signup-text" type="password" placeholder="Confirmation Password"></div>
            <div class="envoy-signup"><button class="signup-submit" type="submit">Inscrivez-vous</button></div>  
        </div>  
    </form>
@endsection