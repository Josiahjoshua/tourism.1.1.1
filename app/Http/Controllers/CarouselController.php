<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carouselitem;


class CarouselController extends Controller
{
    //
    public function home()
    {
        $carousel_items = Carouselitem::all();
    
        // return $carousel_items;
        return view('index', compact('carousel_items'));
    }
}
