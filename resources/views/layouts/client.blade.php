<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css_salma/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{!! asset('js/main.js') !!}"></script>
    
        <title>{{config('app.name','CarDealer')}}</title>
        <link rel="icon" href="{!! asset('img/logo.png') !!}"/>
        
    </head>
    
    <body>
        @include('inc.navbarClient')
        <br> <br>
        <div class="container">
             @yield('content')
        </div>
    </body>
</html>
