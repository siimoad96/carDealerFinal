<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use App\Voiture;
use App\Demande;


class Annonce extends Model
{
    public $table="annonces";
  protected $fillable = ['privilege'];
  protected $primaryKey = 'id';
    public function voitureitem()
    {
      return $this->belongsTo('App\Voiture', 'foreign_key');
    }
  public function user()
  {
    return $this->belongsTo(User::class, 'patenaire_id');
  }
  public function voiture(){
    return $this->hasOne(Voiture::class, 'id','voiture_id');

  }
  public function demandes()
  {
    return $this->hasMany(Demande::class, 'id', 'annonce_id');
  }

}
