<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Demande;
use App\Note;
use App\User;
use App\Comment;
use DB;
class DemandesController extends Controller
{
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function demandeReservation($id)
    {




        $demande = DB::table('demandes');
        $d = $demande->where([['annonce_id', '=', $id], ['privilege', '=', '0']]);
        $demandes = $d->get();

        return view('Partenaire.demandesReservation')->with(compact('demandes', $demandes));
    }
    /*public function demandeReservation($id)
    {



        $demande = Demande::where([['annonce_id', '=', $id], ['privilege', '=', '0']]);
        $demandes = $demande->get();
        foreach ($demandes as $demande) {
            $user = User::find($demandes->client_id);
        }
        $n = Note::where('client_id', '=', $user->id)->first();
        $comm = Comment::where ('client_id', '=', $user->id)->get ();


    return view('Partenaire.demandesReservation',['demandes'=> $demandes,'user' => $user,'n' => $n, 'comm' => $comm]);
    }*/
    }