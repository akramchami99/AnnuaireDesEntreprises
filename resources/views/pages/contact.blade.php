@extends('layout.app')

@section('content')
    <style>
        .footer{
            position: fixed;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <div class="titlecontact">Contactez - nous</div>
    <div class="contact-container"> 
        <form class="des">
            <div class="contact-form">
                <div class="nom"><input class="contact-text" type="text" placeholder="Nom"> </div>
                <div class="sujet"> <input class="contact-text" type="text" placeholder="Sujet"></div>
                <div class="prenom"> <input class="contact-text" type="text" placeholder="Prénom"></div>
                <div class="message"> <textarea placeholder="Message"></textarea></div>
                <div class="email"> <input class="contact-text" placeholder="Email" type="text"></div>
                <div class="submit"> <input class="contact-submit" type="submit"></div>
            </div>
        </form>
    </div>
@endsection