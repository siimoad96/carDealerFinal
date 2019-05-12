<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


use App\Annonce;
use App\Demande;
use Carbon\Carbon;
use App\Voiture;
use Auth;
use App\User;
class AnnoncesController extends Controller
{
########################### Client #######################################
        public function demandeAnnonceEnvoyer(Request $request)
        {
            $demande = new Demande();
            $demande->privilege = 0;
            $demande->annonce_id = request('id');
            $demande->client_id = Auth::id();
            $demande->save();
            return "Votre demande a ete envoyer avec success ";
        }
    public function annonce($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            Annonce::where('id', $id)->update(['privilege' => 1]);
            $demandes = DB::table('demandes')
                ->insert(
                    ['annonce_id' => $id, 'client_id' => Auth::id(), 'privilege' => '0']
                );

            $annonces = DB::table('Annonces')->where('id', $id)->get();

            return view('Client.annonce', compact('annonces'));
        }
        $annonces = DB::table('Annonces')->where('id', $id)->get();
        return view('Client.annonce', compact('annonces'));
    }
    public function annoncePartenaire()
    {


        $title = 'Liste des réservations ';
        $id = Auth::id();
        $annonce = Annonce::where([
            ['partenaire_id', '=', $id], ['privilege', '=', '1']
        ]);
        $annonces = $annonce->get();
        return view('Partenaire.listereservations')->with('title', $title)->with(compact('annonces', $annonces));
    }
    public function recherche()
    {
        $date = Carbon::now();
        $annonces = DB::table('annonces')
            ->where([['privilege', '=', 0], ['date', '>=', $date]])
            ->groupBy('city')
            ->get();
        return view('Client.recherche')->with('annonces', $annonces);
    }
    public function rechercheClient()
    {
        $date = Carbon::now();
        $annonces = DB::table('annonces')
            ->where([['privilege', '=', 0], ['date', '>=', $date]])
            ->groupBy('city')
            ->get();
        return view('pages.recherche')->with('annonces', $annonces);
    }
    public function rechercheDate(Request $request)
    {

        $annonces = Annonce::where([
            ['privilege', '<', 2],
            ['date', '=', $request->input('date')], ['city', '=', $request->input('ville')],
        ])->count();

        if ($annonces > 0) {
            $annonces = Annonce::where([
                ['privilege', '<', 2],
                ['date', '=', $request->input('date')], ['city', '=', $request->input('ville')],])
                ->get();

            $title = 'Rechercher une annonce';
            return view('Client.rechercheDate')
                ->with('title', $title)
                ->with(compact('annonces', 'annonces'));
        } else
            return view('Client.AnnonceNotFound');

    }

    public function rechercheDateClient(Request $request)
    {

        $annonces = Annonce::where([
            ['privilege', '<', 2],
            ['date', '=', $request->input('date')], ['city', '=', $request->input('ville')],
        ])->count();

        if ($annonces > 0) {
            $annonces = Annonce::where([
                ['privilege', '<', 2],
                ['date', '=', $request->input('date')], ['city', '=', $request->input('ville')],
            ])
                ->get();

            $title = 'Rechercher une annonce';
            return view('pages.rechercheDate')
                ->with('title', $title)
                ->with(compact('annonces', 'annonces'));
        } else
            return view('pages.AnnonceNotFound');
    }
    public function reserverAnnonce(Request $request)
    {
        $id = Auth::id();
        $reservation = DB::table('annonces')
            ->where('annonces.id', '=', $request->input('id'));
        $reservations = $reservation->get();

        $voiture = DB::table('annonces')
            ->join('voitures', 'annonces.voiture_id', '=', 'voitures.id')
            ->select(
                'annonces.*',
                'voitures.marque',
                'voitures.type',
                'voitures.modele',
                'voitures.compteur',
                'voitures.boite',
                'voitures.carburant',
                'voitures.partenaire_id'
            )
            ->where('annonces.id', '=', $request->input('id'));
        $voitures = $voiture->get();

        $comment = DB::table('annonces')
            ->join('comment_voitures', 'annonces.voiture_id', '=', 'comment_voitures.voiture_id')
            ->select('annonces.*', 'comment_voitures.comment_positive', 'comment_voitures.comment_negative')
            ->where('annonces.id', '=', $request->input('id'));
        $comments = $comment->get();

        $note = DB::table('annonces')
            ->join('note_voitures', 'annonces.voiture_id', '=', 'note_voitures.voiture_id')
            ->select('annonces.*', 'note_voitures.note')
            ->where('annonces.id', '=', $request->input('id'));
        $notes = $note->get();

        $title = 'Consulter une annonce';
        return view('Client.reserverAnnonce')
            ->with('title', $title)
            ->with(compact('reservations', 'reservation'))
            ->with(compact('voitures', 'voitures'))
            ->with(compact('comments', 'comment'))
            ->with(compact('notes', 'note'));
    }


    public function reservationSuccess(Request $request)
    {
        $idClient = Auth::id();
        $id = $request->input('id');
        if ($request->isMethod('GET')) {
            Annonce::where('id', '=', $id)->update(['privilege' => 1]);

            Demande::where('annonce_id', '=', $id)
                ->insert(
                    [
                        'privilege'      =>      0,
                        'annonce_id'    =>      $id,
                        'client_id'     =>      $idClient
                    ]
                );
            return view('Client.reservationSuccess');
            /*  $annonces = DB::table('Annonces')->where('id', $id)->get();
            return view('Client.annonce', compact('annonces'));
            */
        }
    }
    ################## Partenaire ########################################
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
        return redirect()->back()->with('message', 'Added Successfully to database :P!');
        }
        
        #################### Admin #########################3
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
        $annonces = Annonce::find($id);
        return view('Admin.modifierAnnonce', ['annonces' => $annonces,'id' => $id]);

    }
    public function updateAnnonce(Request $request, $id)
    {
        $this->validate($request, [
            'title'              =>  'required',
            'city'              =>  'required',
            'price'              =>  'required',
            'date'              =>  'required',
            'from'              =>  'required',
            'to'              =>  'required',
            'date'              =>  'required',
            'privilege'              =>  'required',


        ]);
        $annonces = Annonce::find($id);

        $annonces->title = $request->input('title');
        $annonces->city = $request->input('city');
        $annonces->price = $request->input('price');
        $annonces->date = $request->input('date');
        $annonces->from = $request->input('from');
        $annonces->to = $request->input('to');
        $annonces->privilege = $request->input('privilege');
        $annonces->save();
        return redirect()->back()->with('success' , 'Profile updated successfully.');
    }
    
    public function deleteAnnonce($id){
        $annonce = Annonce::where('id', '=', $id)->first();
        $annonce->delete();
        return redirect()->back()->with(['title' => 'Annonce deleted successfully.']);
    }
    
    
}
