<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    // Fillable is the explicit method
    protected $fillable = ['title', 'excerpt', 'slug', 'body', 'category_id'];
    // mirror opposite of the fillable property is guarded
    // protected $guarded = ['id'];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
