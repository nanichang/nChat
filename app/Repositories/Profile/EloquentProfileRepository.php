<?php

namespace App\Repositories\Profile;
use App\Repositories\Profile\ProfileContract;
use App\User;

class EloquentProfileRepository implements ProfileContract
{
    public function profile($slug) {
    	$user = User::where('slug, $slug')->first();
    	return $user;
    }
}
