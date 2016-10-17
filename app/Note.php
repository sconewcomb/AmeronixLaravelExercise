<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function commentable()
    {
        return $this->belongsTo('App/Contact');
    }
}
