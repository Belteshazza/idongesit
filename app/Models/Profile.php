<?php

namespace App\Models;
use App\Models\User;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
