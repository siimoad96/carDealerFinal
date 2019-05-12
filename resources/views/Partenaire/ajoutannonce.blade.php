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
                <ul class="list-group"style="list-style-type:none; ">
                  <li class=""><a href="{{ route('home') }}"data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-list-alt"> Voir Réservations</a></li>
                  <li class=""><a href="{{ route('voiture.add') }}" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-import">  Ajouter Voiture</a></li>
                  <li class=""><a href="/Partenaire/ajoutannonce" class="list-group-item active" ><span class="glyphicon glyphicon-save">  Ajouter Annonce</a></li>
                  <li class=""><a href="/Partenaire/voirVoiture" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-save">  Mes Voitures</a></li>
                  <li class=""><a href="/Partenaire/voirAnnonce" data-toggle="tab" class="list-group-item "><span class="glyphicon glyphicon-save">  Mes Annonces</a></li>                               
                </ul>
            </nav>

        </div>
            
        <div class="col-md-9">

            <div class="row carousel-holder">

                    <div class="row">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                        <h1>Ajouter une annonce :</h1>
                        
                        <form method="POST" action="">

                            {{ csrf_field() }}
                        <br>
                        <span for="de">Matricule:</span>
                            <select type="text" class="form-control" name = "vehicule" required>

                                @foreach($voitures as $voit)

                                <option value="<?php echo $voit->id; ?>">
                                            
                                    {{  $voit->immatricule  }}  
                                </option>
                                @endforeach
                            <br>
                            </select>
<br>                        <span for="de">Titre de l'annonce:</span>
                            <input type="text" class="form-control" name="title" placeholder="Titre de l'annonce" required>

                             <br>
                             
                    <select type="text" class="form-control" name = "city" id="city" required=required class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }} value="{{ old('city') }}" required autocomplete="city" autofocus">
                        <option selected=true disabled selected value>Selectionner une ville</option>
                        <option   value='Agadir'>Agadir</option>
                        <option   value='Asilah'>Asilah</option>
                        <option   value='Arfoud'>Arfoud</option>
                        <option   value='Beni Mellal'>Beni Mellal</option>
                        <option   value='Berkane'>Berkane</option>
                        <option   value='Berrechid'>Berrechid</option>
                        <option   value='Boujdour'>Boujdour</option>
                        <option   value='Casablanca'>Casablanca</option>
                        <option   value='Chefchaouen'>Chefchaouen</option>
                        <option   value='Dakhla'>Dakhla</option>
                        <option   value='El aioun'>El Aioun </option>
                        <option   value='El jadida'>El Jadida </option>
                        <option   value='Errachidia'>Errachidia </option>
                        <option   value='Essaouira'>Essaouira</option>
                        <option   value='Fes'>Fès</option>
                        <option   value='Fnideq'>Fnideq</option>
                        <option   value='Guelmim'>Guelmim</option>
                        <option   value='Guelmima'>Guelmima</option>
                        <option   value='Guercif'>Guercif</option>
                        <option   value='Ifrane'>Ifrane</option>
                        <option   value='Kenitra'>Kénitra</option>
                        <option   value='Khenifra'>Khénifra</option>
                        <option   value='Khouribga'>Khouribga</option>
                        <option   value='Ksar El Kebir'>Ksar el Kebir </option>
                        <option   value='Laayoune'>Laâyoune</option>
                        <option   value='Lagouira '>Lagouira </option>
                        <option   value='Larache'>Larache</option>
                        <option   value='Marrakech'>Marrakech</option>
                        <option   value='Martil'>Martil</option>
                        <option   value='Meknes'>Meknès</option>
                        <option   value='Mohammedia'>Mohammédia</option>
                        <option   value='Nador'>Nador</option>
                        <option   value='Ouarzazate'>Ouarzazate</option>
                        <option   value='Ouezzane'>Ouezzane</option>
                        <option   value='Oujda'>Oujda</option>
                        <option   value='Rabat'>Rabat</option>
                        <option   value='Oujda'>Oujda</option>
                        <option   value='Safi'>Safi</option>
                        <option   value='Sale'>Salé</option>
                        <option   value='Tanger'>Tanger</option>
                        <option   value='Tetouan'>Tétouan</option>
                    </select>
                            <br>

                        <input type="date" name="date" class="form-control" required>

                        <br>
                        <div class="form-inline">
                            <div class="input-group col-lg-5">
                                    <span for="de">De:</span>
                                           <select type="text" class="form-control" name = "from" required>
                                                <?php
                                                    for($i=0;$i<24;$i++)
                                                    {
                                                        if($i<10)
                                                            echo "<option value=0".$i.">0".$i."h</option>";
                                                        else
                                                            echo "<option value=".$i.">".$i."h</option>";
                                                    }
                                                    
                                                ?>
                                            </select>
                            </div> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                            <div class="input-group col-lg-5"> 
                                    <span for="de">À:</span>
                                            <select type="text" class="form-control" name = "to" required>
                                                <?php
                                                    for($i=0;$i<24;$i++)
                                                    {
                                                        if($i<10)
                                                            echo "<option value=0".$i.">0".$i."h</option>";
                                                        else
                                                            echo "<option value=".$i.">".$i."h</option>";
                                                    }
                                                    
                                                ?>
                                            </select>
                                </div>
                                <br>
                            </div>
                                    
                                        <br>
                                        <input type="number" class="form-control" placeholder="DHs" name = "price" required>
                                        <br>
                                        <input type="hidden" name="privilege" value="0" >
                                        <input type="submit" value="Ajouter" class="btn btn-lg btn-primary btn-block" name = "submit" onclick="myFunction()">
                                        <br>
                            </form>
                    </div>
                </div>
            </div>
@endsection

<script>
       /*function myFunction() {
          alert("Ajouté avec Succée!");
        }*/
</script>