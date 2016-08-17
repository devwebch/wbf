<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    // TODO: add relationship to User

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
