<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css_salma/app.css')}}">

        <title>{{config('app.name','CarDealer')}}</title>
        <link rel="icon" href="{!! asset('img/logo.png') !!}"/>
        
    </head>
    
    <body>
        @include('inc.navbarAdmin')
        <br> <br>
        <div class="container">
             @yield('contentAdmin')
        </div>
    </body>
</html>
