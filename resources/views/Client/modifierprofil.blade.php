@extends('layouts.client')

@section('content')

        <h1 >{{$title}}</h1>
        <form>
                <div class="form-group">
                  <label for="nom">Nom:</label>
                  <input type="text" class="form-control" name="name" value="<?php ?>">
                </div>
            
                <div class="form-group">
                    <label for="prenom">Préom:</label>
                    <input type="text" class="form-control" name="prenom" value="<?php ?>">
                </div>
        
                <div class="form-group">
                        <label for="ville">Tél:</label>
                        <input type="text" class="form-control" name="tel" value="<?php ?>">
                </div> 
        
                <div class="form-group">
                  <label for="mdp">Password:</label>
                  <input type="password" class="form-control" name="mdp" value="<?php ?>">
                </div>
        <br>
                <button type="submit" class="btn btn-lg btn-info" value="Enregistrer les modifications"> Enregistrer modification </button>
        </form>
            

        

    </body>



</html>


@endsection