<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Annonce;
use App\Voiture;
use App\Note;
use App\NoteVoiture;
use App\CommentVoiture;

use App\Comment;

use Auth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Notes extends Controller
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
    public function noteClient($id)
    {

        $not = App\Note::where('client_id', '=', $id)->get();
        return $not->note;
    }
    public function noter($id, Request $request)
    {

        if ($request->isMethod('POST')) {

            $no = Note::where('client_id', '=', $id);
            $not = $no->first();
            $not->note = collect([$not->note, $request->input('note')])->sum();
            $nouvel_note = $not->note / 2;

            $not->update(['note' => $nouvel_note]);

            if (!empty($request->input('commentp'))) {
                $comment = new Comment();
                $comment->comment = $request->input('commentp');
                $comment->client_id = $id;

                $comment->save();
            }
            if (!empty($request->input('commentn'))) {
                $comment = new Comment();
                $comment->comment = $request->input('commentn');
                $comment->client_id = $id;

                $comment->save();
            }

            return view('Partenaire.accueil');
        } else {
            return view('Partenaire.formEvaluation')->with('id', $id);
        }
    }
    public function notervoiture($id, Request $request)
    {

        if ($request->isMethod('POST')) {

            $no = NoteVoiture::where('voiture_id', '=', $id);
            $not = $no->first();
            $not->note = collect([$not->note, $request->input('note')])->sum();
            $nouvel_note = $not->note / 2;

            $not->update(['note' => $nouvel_note]);

            $comment = new CommentVoiture();
            if (!empty($request->input('commentp'))) {
               
                $comment->comment_positive = $request->input('commentp');
            }
            if (!empty($request->input('commentn'))) {
                $comment->comment_negative = $request->input('commentn');
            }  
                $comment->voiture_id = $id;

                $comment->save();
            

            return view('Client.accueil');
        } else {
            return view('Client.formEvaluation')->with('id', $id);
        }
    }
}
