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
@endforeach
                <p>Info sur l'annonce  ................................................... etc.
                        Les véhicules Tesla sont déclinés en 1 modèles depuis 2013. Utilisez le formulaire et accédez aux fiches techniques de votre modèle Tesla. 
                </p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                <h2>Annonce 2</h2>
                <p>Info sur l'annonce  ................................................... etc.
                        Les véhicules Tesla sont déclinés en 1 modèles depuis 2013. Utilisez le formulaire et accédez aux fiches techniques de votre modèle Tesla.  </p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
                <div class="col-lg-4">
                <h2>Annonce 3</h2>
                <p>Info sur l'annonce  ................................................... etc.
                        Les véhicules Tesla sont déclinés en 1 modèles depuis 2013. Utilisez le formulaire et accédez aux fiches techniques de votre modèle Tesla. 
                </p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
     
