<?php

namespace App;

use App\User;
use App\UserNote;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user(){
        return $this->hasOneThrough(User::class, Usernote::class);
    }
}
