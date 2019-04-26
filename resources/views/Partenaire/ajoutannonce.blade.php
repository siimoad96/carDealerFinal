@extends('layouts.partenaire')  
@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                
                <div class="container">
                        <div class="title m-b-md">
                                <h1>Ajouter une annonce :</h1>
                            </div>
                    <form method="POST" action="">
                            <br><br><label>Model :</label><br><br>
                        <select type="text" class="form-control" value="Vehicule" name = "vehicule" placeholder="Model">
                                <option value=0> Model1</option>
                            <?php
                                
                                /////////////les voitures disponibles
                            ?>
                        </select>
                        <br><br><label>Disponibilité :</label><br><br>
                        <label>De : </label>
                        <select type="text" class="form-control" name = "heureDebut">
                            <?php
                                for($i=0;$i<24;$i++)
                                {
                                    if($i<10)
                                        echo "<option value=0".$i.">0".$i."h</option>";
                                    else
                                        echo "<option value=".$i."h".">".$i."h</option>";
                                }
                                
                            ?>
                        </select>

                        <label> à :</label>
                        <select type="text" class="form-control" name = "heureFin">
                            <?php
                                for($i=0;$i<24;$i++)
                                {
                                    if($i<10)
                                        echo "<option value=0".$i.">0".$i."h</option>";
                                    else
                                        echo "<option value=".$i."h".">".$i."h</option>";
                                }
                                
                            ?>
                        </select>

                        <br><br>
                            <label>Prix par heure :</label> 
                        <input type="number" class="form-control" placeholder="DH" name = "prixHeure">
                        <br><br>
                        <input type="submit" value="Ajouter" class="btn btn-lg btn-info" name = "submit">
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
@endsection