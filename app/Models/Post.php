<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fillable is the explicit method
    protected $fillable = ['title', 'excerpt', 'slug', 'body'];
    // mirror opposite of the fillable property is guarded
    // protected $guarded = ['id'];
}
