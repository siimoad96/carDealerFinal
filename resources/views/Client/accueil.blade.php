@extends('layouts.client')
        
    <br><br>
    <div align="center" class="jumbotron">
        <br><br><br>
            <h1>CarDealer</h1>
            <br>
            <p class="lead">LOCATION DE VOITURE AU MAROC </p>
            <br><br> 
            <p><a class="btn btn-lg btn-info" href="/Client/recherche" role="button">Rechercher une voiture</a></p>
    </div>



        <!-- les Annonces -->
        <div class="row">
                <div class="col-lg-4">
                @foreach($annonces as $anno)
                <h2>{{$anno->title}}</h2>
                <br>
                <h5>{{$anno->city}}</h5>
                <h5>{{$anno->price}}</h5>
                </div>
@endforeach

               
            </div>
     