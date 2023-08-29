<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    use HasFactory;    
    
    protected $fillable = [
        'name',
        'date',
        'preview_desc',
        'img',
    ];

    // Define any additional relationships or methods here
}
