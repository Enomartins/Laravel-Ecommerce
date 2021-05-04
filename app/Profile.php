<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'country', 'city', 'address', 'phone', 'age', 'card_type', 'card_number', 'card_date', 'cvv'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
