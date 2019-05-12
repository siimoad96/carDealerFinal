<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
protected $table = 'users';
    protected $primaryKey = 'id';

    public function annonces()
    {
        return $this->hasMany(Annonce::class,'id','partenaire_id');
    }
    public function demandes()
    {
        return $this->hasMany(Demande::class, 'id', 'client_id');
    }
    protected $fillable = [
        'name','city','tel', 'privilege','email', 'password', 'profile_image'
    ];

    public function isRole(){
        return $this->privilege;
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function notes(){

        return $this->hasOne('App\Note');
    }
}
