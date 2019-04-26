@extends('layouts.partenaire')

        <h1 >Vos informations personnelles</h1>
        <div>
            <form action="" method="post">
                <label>Nom Complet : </label>
                <input type="text" name="nom" value="{{ Auth::user()->name }}">
                <br><br>

                <label>Ville : </label>
                <input type="text" name="ville" value="<?php ?>">
                <br><br>
                <label> TEL :</label>
                <input type="tel" name="tel" value="<?php ?>">
                <br><br>
                <label>Mot de passe :</label>
                <input type="password" name="mdp" value="<?php ?>">
                <br><br>

                <input type="submit" name="submit" value="Enregistrer les modifications">
                <br><br>

            
            </form>
            
        </div>
        

