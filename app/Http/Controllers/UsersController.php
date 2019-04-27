<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;

use App\Annonce;
use App\Voiture;
use Auth;
=======
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
>>>>>>> a20ce0409235ac6fa4193707c90d8276789fc7b0

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //lister les villes existantes
    public function ville()
    {
        $ville = User::select('city')->first();
        $villes = User::groupBy('city','ASC')->get();
        return(compact('villes','ville'));

    }
    
}
