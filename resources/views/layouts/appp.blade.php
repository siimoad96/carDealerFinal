
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css_salma/app.css')}}">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('css_salma/bootstrap.css')}}" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="{{asset('css_salma/shop-homepage.css')}}" rel="stylesheet">

        <title>{{config('app.name','CarDealer')}}</title>
        <link rel="icon" href="{!! asset('img/logo.png') !!}"/>
        
    </head>
    
    <body>
        @include('inc.navbar')
        <br> <br>
        <div class="container">
             @yield('content')
        </div>

         <!-- JavaScript -->
        <script src="{{asset('js/jquery-1.10.2.js')}}"></script> 
        <script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>


