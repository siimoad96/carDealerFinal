<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Voiture;
use Auth;

class VoituresController extends Controller
{
    public function ajoutVoitureSuccess()
    {
        $voiture = new Voiture();
        $voiture->marque = request('marque');
        $voiture->type = request('type');
        $voiture->immatricule = request('immatricule');
        $voiture->modele = request('modele');
        $voiture->compteur = request('compteur');
        $voiture->boite = request('boite');
        $voiture->carburant = request('carburant');
        $voiture->partenaire_id =  Auth::id();

        $voiture->save();
    }
}
