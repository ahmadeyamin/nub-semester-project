<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     // Define the relationship with the User model
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // Define the relationship with the Image model
     public function images()
     {
         return $this->hasMany(Image::class);
     }
}
