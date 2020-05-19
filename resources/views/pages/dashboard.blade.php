@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

<div class="dashboard">
        <div class="welcome">
            Bienvenue {{ ucfirst(Auth()->user()->firstname) }}
        </div>
        <div class="dashboard-container">
            <div class="gestion">
                <div class="ajouter"> <label>Si vous souhaiter Publier votre entreprise</label><br><br><button class="gestion-button" type="button" onclick="window.location='{{ url('ajouter') }}'">Ajoutez Une Entreprise</button></div>
                <div class="afficher"> <label>Si vous souhaiter mofidier ou supprimer une de vos entreprises</label><br><br><button class="gestion-button" type="button" onclick="window.location='{{ url('afficher') }}'">Affichez vos Entreprises</button></div>
            </div>
        </div>
</div>


@endsection