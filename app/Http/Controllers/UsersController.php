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

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexClient()
    {
        $clients = DB::select("select * from `users` where `privilege`='0'");
        return view( 'Admin.gererClient', ['clients' => $clients]);


    }
    public function indexPartenaire(){

        $partenaires = DB::select("select * from `users` where `privilege`='1'");
        return view('Admin.gererPartenaire', ['partenaires' => $partenaires]);

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
    public function editClient($id)
    {
        $client = User::where('id', $id)->firstOrFail();
        return view('Admin.modifierClient', compact('client'));
    }
    public function editPartenaire($id)
    {
        $partenaire = User::where('id', $id)->firstOrFail();
        return view('Admin.modifierPartenaire', compact('partenaire'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name'              =>  'required',
            'city'              =>  'required',
            'tel'              =>  'required',
            'email'              =>  'required',

        ]);
        $user = User::where('id', $id)->firstOrFail(); /* trouve l'entrée en DB */
        $user->name = $request->input('name');
        $user->city = $request->input('city');
        $user->tel = $request->input('tel');
        $user->email = $request->input('email');
        $user->save();


        return redirect()->back()->with(['status' => 'Client updated successfully.']); /* redirige vers la vue d'édition */
    }

    public function destroy($id)
    {
        //
    }
    public function deleteClient($id){
        $client = User::where('id','=',$id)->first();
        $client->delete();
        return redirect()->route('A_ClientList')->with(['title' => 'User deleted successfully.']);;
    }
    public function deletePartenaire($id)
    {
        $client = User::where('id', '=', $id)->first();
        $client->delete();
        return redirect()->route('A_PartenaireList')->with(['title' => 'User deleted successfully.']);;
    }
    //lister les villes existantes
    public function ville()
    {
        $ville = User::select('city')->first();
        $villes = User::groupBy('city','ASC')->get();
        return(compact('villes','ville'));

    }
    
}
