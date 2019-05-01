<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


use App\Annonce;
use App\Voiture;
use Auth;
use App\User;
class AnnoncesController extends Controller
{
    public function recherche()
    {
        $annonce = Annonce::where([
            ['privilege', '=', 0],
        ]);
        $annonces = DB::table('annonces')
            ->groupBy('date')
            ->get();
        return view('Client.recherche')->with('annonces', $annonces);
    }
    public function rechercheDate(Request $request)
    {

        $annonce = Annonce::where([
            ['privilege', '=', 0],
            ['date', '=', $request->input('date')],
        ]);
        $annonces = Annonce::orderBy('city', 'ASC')->get();
        $ville = Annonce::select('city')->groupBy('city');
        $villes = $ville->get();
        $joint = DB::table('annonces')
            ->join('voitures', 'annonces.voiture_id', '=', 'voitures.id')
            ->select('annonces.*', 'voitures.marque', 'voitures.type', 'voitures.modele')
            ->where([
                ['privilege', '=', 0],
                ['date', '=', $request->input('date')]
            ]);


        $modele = $joint->groupBy('modele');
        $modeles = $modele->get();
        $jointMarque = DB::table('annonces')
            ->join('voitures', 'annonces.voiture_id', '=', 'voitures.id')
            ->select('annonces.*', 'voitures.marque', 'voitures.type', 'voitures.modele')
            ->where([
                ['privilege', '=', 0],
                ['date', '=', $request->input('date')]
            ]);
        $marque = $jointMarque->groupBy('marque');
        $marques = $marque->get();
        $type = $jointMarque->groupBy('type');
        $types = $type->get();
        $title = 'Rechercher une annonce';
        return view('Client.rechercheDate')
            ->with('title', $title)
            ->with(compact('annonces', 'annonces'))
            ->with(compact('villes', 'ville'))
            ->with(compact('marques', 'marque'))
            ->with(compact('modeles', 'modele'))
            ->with(compact('types', 'type'));
    }


    public function resultat(Request $request)
    {
        $request->input('marque');
        $annonces = DB::table('annonces')->where([
            ['city', '=', $request->input('ville')]
        ])->get();
        return view('Client.resultat', ['annonces' => $annonces]);
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

    
public function ajoutannonce()
        {
            $id = Auth::id();
            $voiture =Voiture::where('partenaire_id','=', Auth::id() );
            $voitures = $voiture->get();
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
    public function indexAnnonce()
    {
        $annonces = DB::table('annonces as a')
        ->join('voitures as v','a.voiture_id','v.id')
        ->join('users as u','a.partenaire_id','u.id')
        ->select('a.id', 'a.title', 'a.city', 'a.price', 'a.date', 'a.from', 'a.to','a.privilege','u.name as u_name', 'v.marque as v_marque')
        ->get();
        return view('Admin.gererAnnonce', ['annonces' => $annonces]);
    }
    public function editAnnonce($id)
    {
        $annonce = Annonce::where('id', $id)->firstOrFail();
        return view('Admin.modifierAnnonce', compact('annonce'));
    }
    public function updateAnnonce(Request $request, $id)
    {
        $request->validate([
            'titre'              =>  'required',
            'city'              =>  'required',
            'price'              =>  'required',
            'date'              =>  'required',
            'from'              =>  'required',
            'to'              =>  'required',
            'date'              =>  'required',
            'partenaire'              =>  'required',
            'voiture'              =>  'required',
            'status'              =>  'required',


        ]);
        $annonce = DB::table('annonces as a')
            ->join('voitures as v', 'a.voiture_id', 'v.id')
            ->join('users as u', 'a.partenaire_id', 'u.id')
            ->select('a.id', 'a.title', 'a.city', 'a.price', 'a.date', 'a.from', 'a.to', 'a.privilege', 'u.name as u_name', 'v.marque as v_marque')
            ->where('a.id','=',$id)
            ->get();
        $annonce->title = $request->input('name');
        $annonce->city = $request->input('city');
        $annonce->price = $request->input('price');
        $annonce->date = $request->input('date');
        $annonce->from = $request->input('from');
        $annonce->to = $request->input('to');
        $annonce->privilege = $request->input('privilege');
        $annonce->u_name = $request->input('u_name');
        $annonce->v_marque = $request->input('v_marque');
        $annonce->status = $request->input('status');


        $annonce->save();


        return redirect()->back()->with(['title' => 'Client updated successfully.']); /* redirige vers la vue d'édition */
    }
    public function annonce($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            Annonce::where('id', $id)->update(['privilege' => 1]);


            $annonces = DB::table('Annonces')->where('id', $id)->get();
            return view('Client.annonce', compact('annonces'));
        }
        $annonces = DB::table('Annonces')->where('id', $id)->get();
        return view('Client.annonce', compact('annonces'));
    }
    
}
