<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

use App\Annonce;
use App\Voiture;
use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        if (Auth::user()->privilege == 0)
        {$annonces =Annonce::with('user')->where('privilege','<>','2')->get(); 

            return view( 'Client.accueil')->with(compact('annonces',$annonces));}
        elseif ( Auth::user()->privilege == 1) {
            $title = 'Liste des réservations ';
            $id = Auth::id();
            $annonce = Annonce::with('user');
            $annoncess= $annonce->where([
                ['partenaire_id', '=', $id], ['privilege', '=', '1']
            ]);
            $annonces = $annoncess->get();
            return view('Partenaire.accueil')->with('title', $title)->with(compact('annonces', $annonces));
            
        }
        else
            return view("Admin.accueil");    }

    
}
