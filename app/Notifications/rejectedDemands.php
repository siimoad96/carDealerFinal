<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class rejectedDemands extends Notification
{
    use Queueable;
    public $id;

    public function __construct($id)
    {
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->id,
            'user' => $notifiable
        ];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
