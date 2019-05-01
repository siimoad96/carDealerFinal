<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
  protected $table = 'voitures';
   // public $table="voitures";
    public function annonceitems()
    {
      return $this->hasMany('App\Annonce');
    }}
