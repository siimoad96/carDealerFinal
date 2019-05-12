@extends('layouts.partenaire')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="container">
                        <h1>Formulaire d'évaluation </h1> <br>
                        <h2>Donnez votre avis sincère sur la voiture que vous avez louer  </h2>
                    <form method="POST" action="" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <label for="note">Donnez une note entre 0 et 5 </label>
                        <br><br>
                        <select name="note" class="form-control" >

                            <option value="0">0</option>
                            <option value="1">1           </option>
                            <option value="2">2          </option>
                            <option value="3">3        </option>
                            <option value="4">4        </option>
                            <option value="5">5       </option>

                       </select>
                        <br><br>
                        <label for="commentp">Etes-vous content de cette location? Dites nous pourquoi: </label>
                        <input type="text" class="form-control"  name = "commentp">
                        <br><br>
                        <label for="commentn">Avez-vous un mauvais feedback sur cette voiture? Dites nous pourquoi: </label>
                        <input type="text" class="form-control"  name = "commentn">
                        <br><br> 
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='client_id' value='{{ $id }}'>

                        <input type="submit" class="btn btn-lg btn-info" value="Ajouter" name = "submit">
                        <br><br>
                    </form>
                </div>
            </div>
        </div>

@endsection