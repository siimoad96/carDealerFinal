@extends('layouts.partenaire')
@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <br>

                <div class="container">
                        <h1>Liste des réservations :</h1> <br>
                    <form method="POST" action="">
                        <label>N° annonce :</label>
                            <?php
                                //foreach() ---- reservations :
                            ?>
                            <input type='text'  class="form-control"value='<?php echo 'idAnnonce'  //idAnnonce ?>' name='annonce'>
                            <br><br>
                                <label>Note client :</label>
                            <input type='text' class="form-control" value='<?php echo  'idNote' //idNote?>' name='note'>
                            <?php 
                                //end foreach
                            ?>
                        <br><br>
                        <input type="submit" class="btn btn-lg btn-info" value="Confirmer" name = "submit">
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
@endsection
