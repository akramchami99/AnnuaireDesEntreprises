@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/ajouter.css')}}">

<div class="titre">
    Ajouter
</div>

<div class="ajoutre">
    <form >
        <div class="entreprise-details">
            <div class="intitule"><input class="details-text" type="text" placeholder="Intitulé"> </div>
            <div class="domaine"> <input class="details-text" type="text" placeholder="Domaine"></div>
            <div class="email"> <input class="details-text" type="text" placeholder="Email"></div>
            <div class="adresse"> <textarea placeholder="Adresse"></textarea></div>
            <div class="telephone"> <input class="details-text" placeholder="Telephone" type="text"></div>
            <div class="submit"> <input class="details-submit" type="submit" value="Ajouter"></div>
        </div>
    </form>
</div>

@endsection