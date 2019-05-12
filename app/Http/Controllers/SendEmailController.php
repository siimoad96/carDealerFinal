<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\Demande;
use DB;
use Auth;
use Mail;
use App\User;
use App\Mail\Emails;
use App\Mail\Emailr;
use App\Notifications\acceptedDemands;
use App\Notifications\rejectedDemands;


class SendEmailController extends Controller
{
    
    public function approuverDemande($id)
    {
        $demande =  DB::table('demandes')->where('id',$id)->first();
        $id_annonce =  DB::table('demandes')->where('id', $id)->value('annonce_id');

       // $id_annonce = $demande->annonce_id;

        $d = DB::table('demandes')->where('annonce_id','=',$id_annonce)->update(["privilege" => "2"]);
        $demande_update = DB::table('demandes')->where('id', $id)->update(["privilege" => "1"]);  // demande acceptee


         $annonce = Annonce::where('id','=',$id_annonce)->first();
         $ann = $annonce->get();
         $annonce->update([ "privilege" => "2" ]);
        $client = User::where('id', '=', $demande->client_id)->first();
        $client_rej = User::with('annonce')->where([['privilege', '=', '2'],['annonce_id','=',$id_annonce]]);
        $partenaire = User::where('id', '=', $annonce->partenaire_id)->first();

                $client->notify(new acceptedDemands($client->id));
       // $client_rej->notify(new rejectedDemands($client_rej->id));

        $email = $client->email;
        $subject = "Réservation approuvée";
        $subject2 = "Information du client que vous avez choisi";

        $name = $client->name;
        $title = $annonce->title;
        $p_name = $partenaire->name;
        $p_email = $partenaire->email;
        $p_tel = $partenaire->tel;

        $tel_client = $client->tel;

        Mail::to($email)->send(new Emails($subject, $name, $title, $p_name, $p_email, $p_tel));
        Mail::to($p_email)->send(new Emails($subject2, $p_name, $title, $name, $email, $tel_client));
        $sujet = "Rendu de location sur le client";
       Mail::to($p_email)->later($annonce->date, new Emailr($sujet, $p_name, $client->id));


        return back();




    }
}
