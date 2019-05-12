<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Annonce;
class Demande extends Model
{
    protected $table = 'voitures';
    protected $fillable = ['privilege'];
    protected $primaryKey = 'id';

   /* public function user()
    {
        return $this->hasMany(User::class, 'id', 'demande_id');
    }
    public function annonce()
    {
        return $this->hasMany(Annonce::class, 'id', 'demande_id');
    }*/
    public function annonces()
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

}
