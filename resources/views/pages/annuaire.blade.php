@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/annuaire.css')}}">
    @if(count($entreprises) >= 1 )
        <div class="nbrres">{{count($entreprises)}} Résultats Trouvées.<div>
        <ul class="ule">
             @foreach ($entreprises as $ep)
                <li class="lie">
                    <span class="intitule">{{$ep->intitule}}</span>
                    <span class="details"><a href="#">>></a></span>
                </li>
            @endforeach
        </ul>
    @else
        <div class="noep">Aucune Entreprise</div>
    @endif
@endsection