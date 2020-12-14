<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function postImage()
    {
        // $imagePath = ($this->image) ? $this->image : 'post/nNXp6XD6BzuqVjF4emR6BsEgdEFVYebhts9Fk9k3.png';
        // return '/storage/' . $imagePath; 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
