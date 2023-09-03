<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourcesProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'preview_desc',
        'img', // Assuming you have an 'img' column for the image URL
        'created_by'
    ];

    // Define any additional relationships or methods here
}
