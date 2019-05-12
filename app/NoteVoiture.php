<?php

namespace App;
use App\Voiture;
use Illuminate\Database\Eloquent\Model;

class NoteVoiture extends Model
{
    protected $table = 'note_voitures';
    protected $primaryKey = 'id';

    protected $fillable = ['note', 'voiture_id'];


    public function voiture()
    {
        return $this->hasOne(Voiture::class, 'id', 'voiture_id');
    }
}
