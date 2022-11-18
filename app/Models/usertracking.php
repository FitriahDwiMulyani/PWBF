<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usertracking extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Usersendmytrash(){
        return $this->hasMany(Usersendmytrash::class);
    }
    public function UserTransaction(){
        return $this->belongsTo(UserTransaction::class);
    }
}
