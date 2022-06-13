<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    //
    protected $guraded = [];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
