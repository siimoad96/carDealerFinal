<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Annonce;
use App\Voiture;
use Auth;
use App\User;
class AnnoncesController extends Controller
{
    
    public function ajoutannonce()
    {
        $voiture =Voiture::where('partenaire_id',Auth::id())->first();
        $voitures = Voiture::orderBy('immatricule','ASC')->get();
        $ville = User::select('city')->groupBy('city');
       $villes = $ville->get();
        $title = 'Ajouter une annonce';
        return view('Partenaire.ajoutannonce')->with('title', $title)->with(compact('voitures', 'voiture'))->with(compact('villes','ville'));
    }
    public function ajoutAnnonceSuccess()
    {
        $annonce = new Annonce();
        $annonce->title = request('title');
        $annonce->city = request('city');
        $annonce->price = request('price');
        $annonce->date = request('date');
        $annonce->from = request('from');
        $annonce->to = request('to');
        $annonce->partenaire_id =  Auth::id();
        $annonce->voiture_id =  request('vehicule');
        $annonce->privilege = request('privilege');
       

        $annonce->save();
        return "Added Successfully to database :P ";
    }
    
}
