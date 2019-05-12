<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Emails extends Mailable
{
    use Queueable, SerializesModels;

    public $sub;
    public $name;
    public $p_name;
    public $p_email;
    public $title;
    public $p_tel;

    public function __construct($s, $n, $t, $p_n, $p_e, $p_t)
    {
        $this->sub = $s;
        $this->name = $n;
        $this->title = $t;
        $this->p_name = $p_n;
        $this->p_email = $p_e;
        $this->p_tel = $p_t;
    }

    public function build()
    {
        $subject = $this->sub;
        $nom_client = $this->name;
        $nom_par = $this->p_name;
        $email_p = $this->p_email;
        $tel = $this->p_tel;
        $title  = $this->title;

        return $this->from('laravelemailstest@gmail.com')->view('partenaire.demandeApprouve')->with('nom_client', $nom_client)->with('title', $title)->with('subject', $subject)->with('nom_par', $nom_par)->with('email_p', $email_p)->with('tel', $tel);
    }
    public function getmessage()
    {
        return $this->mes;
    }
}
