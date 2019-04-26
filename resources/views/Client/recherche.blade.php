@extends('layouts.client')

@section('content')

        <h1  >{{$title}}</h1>
        <div >

            <h3>Veuillez remplire tout les champs</h3><br><br>
                <form action="/action_page.php">

                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Entrer la ville">
                </div>
                
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" placeholder="Entrer la date">
                </div>
                
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Entrer le type de voiture">
                </div>
                <br> <br>
                <button type="submit" class="btn btn-lg btn-info" >Rechercher</button>
                
                </form>
            
        </div>
        


@endsection