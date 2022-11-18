<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersendmytrash extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function usertransaction(){
        return $this->belongsTo(usertransaction::class);
    }

    public function usertracking(){
        return $this->belongsTo(usertracking::class);
    }
}
