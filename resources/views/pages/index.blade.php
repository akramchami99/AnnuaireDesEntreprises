@extends('layout.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <div class="search-bar">
        <h1>Découvrez</h1>
        <h1>l'annuaire professionnels</h1>
        <h1>des entreprises</h1>
        <h3>Rechercher parmi {{$counts}} societés</h3>
        <input class="search-input1" type="text" placeholder="Qui ? (Societé)"><input class="search-input2" type="text" placeholder="Où ? (Ville)"><button class="button-search" ><span>Search</span></button>
    </div>
    
    <div class="slideshow-container">
        <div class="titleslideshow"><p style="font-weight: bold; font-size : 20px">Les Professionnels du jour</p><p>Retrouvez notre sélection de professionnels à votre service</p></div>
        <div class="mySlides fade">
          <ul class="ula">
              <li class="lia">
                <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
              </li>
              <li class="lia">
                <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
              </li>
              <li class="lia">
                <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
              </li>
          </ul>
        </div>
        
        <div class="mySlides fade">
            <ul class="ula">
                <li class="lia">
                  <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                </li>
                <li class="lia">
                  <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                </li>
                <li class="lia">
                  <div class="cadr"><p>This Could be you</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                </li>
            </ul>
        </div>
        
      
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
    </div><br>
        
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    <div class="booste-container">
        <div class="titleboost">Booster votre Communication</div>
        <div class="perks-container">
            <div class="perk1"><p style="font-weight : bold;">Inscription Gratuite</p><p>Inscrivez-vous et rejoingnez l'ensemble des professionnels du Maroc</p></div>
            <div class="perk2"><p style="font-weight : bold;">Professionnels du Jour</p><p>Gagnez en visibilité avec un espace priviligié sur la page d'acceuil</p></div>
            <div class="perk3"><p style="font-weight : bold;">Annoncez sur IndexEntreprise</p><p>Optez pour une diffusion nationale ou régionale</p></div>
        </div>
        <div class="perks-container1">
            <div class="perk4"><p style="font-weight : bold;">Soyez visible sur Tout internet</p><p>Bénéficiez d'une image dynamique et renforcez votre visibilité sur la toile</p></div>
            <div class="perk5"><p style="font-weight : bold;">Partagez vos Pormos</p><p>Diffusez vos offres promotionnelles et dynamisez vos ventes</p></div>
        </div>
    </div>
    
@endsection