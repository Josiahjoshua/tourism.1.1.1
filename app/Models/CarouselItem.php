<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    protected $table = 'carousel_items';

    protected $fillable = [
        'image',
        'text',
        'created_by'

    ];

    // Rest of your model code
}
