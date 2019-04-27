<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voiture;
use App\annonce;
use DB;


class AnnoncesController extends Controller
{
/*
    public function recherche()
    {
        $voitures = voiture::all();
        return view('Client.recherche',['voitures' => $voitures]);

    }


    
    public function resultat(Request $request)
    {
       $request->input('marque');
       $annonces = DB::table('annonces')->where([
                        ['city', '=', $request->input('ville')],
                        ['date', '=', $request->input('date')],
                    ])->get();

        return view('Client.resultat',['annonces' => $annonces]);

}
    public function reserverAnnonce(Request $request)
        {
            echo 'ok';
            print_r($request->input('marque'));
            //return view('Client.reserverAnnonce');

        }
*/

    public function recherche()
        {

            $annonces = DB::table('annonces')
            ->join('voitures', 'annonces.voiture_id', '=', 'voitures.id')
            ->where('privilege','=',0)
            ->select('annonces.*','voitures.marque','voitures.type','voitures.modele')
            ->get();
            return view('Client.recherche',['annonces' => $annonces]);

        }


        public function resultat(Request $request)
    {


        $request->input('marque');
        $annonces = DB::table('annonces')->where([
                        ['city', '=', $request->input('ville')],
                        ['date', '=', $request->input('date')],
                     ])->get();
 
         return view('Client.resultat',['annonces' => $annonces]);
        /*
        $annonces = DB::table('annonces')
        
        ->orwhere('city', '=', $request->input('ville'))
        ->orWhere('voiture_id', $request->input('voiture_id'))
        ->get();

        return view('Client.resultat',['annonces' => $annonces]);
*/
}

public function reserverAnnonce(Request $request)
        {
            $reservations = DB::table('annonces')
            ->join('note_voitures', 'annonces.voiture_id', '=', 'note_voitures.voiture_id')
            ->join('comment_voitures', 'annonces.voiture_id', '=', 'comment_voitures.voiture_id')
            ->where('annonces.id','=',$request->input('id'))
            ->select('annonces.*','note_voitures.note','comment_voitures.comment')
            ->get();
            return view('Client.reserverAnnonce',['reservations' => $reservations]);

        }

    
}
