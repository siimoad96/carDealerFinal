<?php

namespace App;
use App\NoteVoiture;
use Illuminate\Database\Eloquent\Model;
use App\Annonce;
class Voiture extends Model
{
  protected $table = 'voitures';
  protected $primaryKey = 'id';

  protected $fillable = ['marque', 'type','immatricule','modele','compteur','carburant','car_image'];  // public $table="voitures";
    public function annonceitems()
    {
      return $this->hasMany('App\Annonce');
    }
  public function notevoiture()
  {
    return $this->belongsTo(NoteVoiture::class, 'voiture_id', 'id');
  }
  public function annonce(){
    return $this-> belongsTo(Annonce::class,'voiture_id','id');

  }
  }
