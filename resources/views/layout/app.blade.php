<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','AnnuaireDesEntreprises')}}</title>        
    </head>
    <body>
        @include('pages.navbar')
        @yield('content')
        <div class="footer">
            <p>Rights Reserved IndexEntreprise. Akram Chami.</p>
        </div>
    </body>
</html>
