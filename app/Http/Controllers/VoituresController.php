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
        return "Added Successfully to database :P ";
    }


    //chercher les voitures d'un partenaire
   /* public function chercher(){

        $voiture =Voiture::where('partenaire_id',Auth::id());
        $voitures = Array('voiture'=>$voiture);
        return $voitures;    
    }*/
   /* public function uploadImage(Request $request){
        $this->validate($request,[
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $image = $request->file('select_file');
        $new_name = $rand() . '.' . $image-> getClientOriginalExtension();
        $image->move(public_path("images"),$new_name);
        return back()->with('success','Image Uploaded Successfully')->with('path',$new_name);
    }*/
}
