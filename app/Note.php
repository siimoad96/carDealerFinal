<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Note extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'id';

    protected $fillable = [ 'note','client_id'];

    public function user(){
        return $this->belongsTo( User::class, 'client_id', 'id');
    }
}
