<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'facebook_url',
        'twitter_url',
        'google_plus',
        'linkdin_url',
        'about',
        'address',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
