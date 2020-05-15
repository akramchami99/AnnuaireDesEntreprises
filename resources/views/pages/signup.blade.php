
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    <div class="titlesignup">Inscrivez - vous</div>
    <form action="{{url('post-registration')}}" method="POST">
        {{ csrf_field() }}
        <div class="signup-form">
            <div class="prenom-signup">
                <input class="signup-text" type="text" placeholder="Prenom"  name="firstname"  required autocomplete="firstname">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="nom-signup">
                <input class="signup-text" type="text" placeholder="Nom"  name="lastname"  required autocomplete="lastname">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="email-signup">
                <input class="signup-text" type="text" placeholder="Email"  name="email"  required autocomplete="email"> 
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="emconf-signup"><input class="signup-text" type="text" placeholder="Confirmation Email"></div>

            <div class="pass-signup">
                <input class="signup-text" type="password" placeholder="Password" name="password" required autocomplete="new-password"> 
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="passconf-signup">
                <input class="signup-text" type="password" placeholder="Confirmation Password"  name="password_confirmation" required autocomplete="new-password">
            </div>
            
            <div class="envoy-signup"><button class="signup-submit" type="submit">Inscrivez-vous</button></div>  
        </div>  
    </form>
@endsection