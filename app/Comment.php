<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;


class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $fillable = ['comment','client_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

}
