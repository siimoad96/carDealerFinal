<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Emailr extends Mailable
{
    use Queueable, SerializesModels;

    public $sub;
    public $name;
    public $id;


    public function __construct($s, $n, $id)
    {
        $this->sub = $s;
        $this->name = $n;
        $this->id = $id;
    }

    public function build()
    {
        $subject = $this->sub;
        $name = $this->name;
        $client_id = $this->id;


        return $this->from('laravelemailstest@gmail.com')->view('partenaire.MailEvaluation')->with('name', $name)->with('client_id', $client_id)->with('subject', $subject);
    }
    public function getmessage()
    {
        return $this->mes;
    }
}
