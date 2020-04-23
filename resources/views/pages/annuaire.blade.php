@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/annuaire.css')}}">
    @if(count($entreprises) >= 1 )
        @foreach ($entreprises as $ep)
            <div class="listing">
                <h3>{{$ep->intitule}}</h3>
            </div>
        @endforeach
    @else
        <div class="noep">Aucune Entreprise</div>
    @endif
@endsection