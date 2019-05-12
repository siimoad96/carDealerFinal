@extends('layouts.partenaire')

@section('content')

<style>
    .row{     
        padding: 5px;
    }

    
    .nav-sidebar { 
        width: 100%;
        padding: 30px 0;
        border-right: 1px solid #ddd;
        font-size: 20px;

    }
    .nav-sidebar a {
        color: #333;
        -webkit-transition: all 0.08s linear;
        -moz-transition: all 0.08s linear;
        -o-transition: all 0.08s linear;
        transition: all 0.08s linear;
    }
    .nav-sidebar .active a { 
        cursor: default;
        background-color: #0b56a8; 
        color: #fff; 
    }
    .nav-sidebar .active a:hover {
        background-color: #E50000;   
    }
    .nav-sidebar .text-overflow a,
    .nav-sidebar .text-overflow .media-body {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis; 
    }

    .car{
        color:#0b56a8;
    }

</style>

<div class="">
  
        <div class="row">
    
                <div class="col-md-3">
                        <br>
                        <img src="{{asset('img/logo.png')}}" alt="" width="250px">
                        <h2 class="car " align="center" >CarDealer</h2>
                        
            <br>            
        
          
        
    <nav class="nav-sidebar">
            <ul class="list-group"style="list-style-type:none;  ">
              <li class=""><a href="{{ route('home') }}" data-toggle="tab" class="list-group-item"><span class="glyphicon glyphicon-list-alt"> Voir Réservations</a></li>
              <li class=""><a href="{{ route('voiture.add') }}" class="list-group-item active" ><span class="glyphicon glyphicon-import">  Ajouter Voiture</a></li>
              <li class=""><a href="/Partenaire/ajoutannonce" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-save">  Ajouter Annonce</a></li>
              <li class=""><a href="/Partenaire/voirVoiture" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-save">  Mes Voitures</a></li>  
              <li class=""><a href="/Partenaire/voirAnnonce" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-save">  Mes Annonces</a></li>                                                        
            </ul>
        </nav>
    
                
            </div>
            
            <div class="col-md-9">
    
                <div class="row carousel-holder">

                        <div class="row">
                                <h2>Ajouter une voiture</h2>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input  type="file" class="form-control" name="car_image" required>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Marque" name = "marque" required>
                                    <br>
                                    <select type="text" class="form-control" name = "type" id="type" required=required class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }} value="{{ old('type') }}" required autocomplete="type" autofocus">
                        <option selected=true disabled selected value>Selectionner le type de voiture</option>
                        <option   value='Berline'>Berline</option>
                        <option   value='Break'>Break</option>
                        <option   value='Monospace'>Monospace</option>
                        <option   value='Citadine'>Citadine</option>
                        <option   value='Coupé/Cabriolé'>Coupé / Cabriolet</option>
                        <option   value='Pick up'>Pick up</option>
                        <option   value='4x4'>4x4</option>
                        <option   value='Crossover'>Crossover</option>
                        <option   value='Utilitaire/Fourgonnete'>Utilitaire / Fourgonnette</option>
                    </select>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Immatricule" name = "immatricule" required>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Modele" name = "modele" required>
                                    <br>
                                    <input type="number" class="form-control" placeholder="Compteur" name = "compteur" required>
                                    <br>
<select type="text" class="form-control" name = "boite" id="boite" required=required class="form-control{{ $errors->has('boite') ? ' is-invalid' : '' }} value="{{ old('boite') }}" required autocomplete="boite" autofocus">
                        <option selected=true disabled selected value> Selectionner le type de boite</option>
                        <option   value='Manuelle'>Manuelle</option>
                        <option   value='Automatique'>Automatique</option>
                        <option   value='Sequentielle'>Sequentielle</option>
                    </select>                                    <br>
<select type="text" class="form-control" name = "carburant" id="boite" required=required class="form-control{{ $errors->has('carburant') ? ' is-invalid' : '' }} value="{{ old('carburant') }}" required autocomplete="carburant" autofocus">
                        <option selected=true disabled selected value> Selectionner le type de carburant</option>
                        <option   value='Diesel'>Diesel</option>
                        <option   value='Essence'>Essence</option>
                        <option   value='GPL'>GPL</option>
                    </select>                                      <br>
                                   
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Ajouter" name = "submit" onclick="myFunction()">
                                    
                                    <br><br>
                                </form>
                            

    
            </div>
    
        </div>  
        



        

@endsection

<script>
       /* function myFunction() {
          alert("Ajouté avec Succée!");
        }*/
</script>