<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function Note() {
        
        return $this->hasMany('App\Note');
    }
}
