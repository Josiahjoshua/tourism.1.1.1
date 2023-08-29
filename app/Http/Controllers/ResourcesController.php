<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResourcesProduct;

class ResourcesController extends Controller
{
    public function home()
    {
        $resources_products = ResourcesProduct::all();
    
        return view('index', compact('resources_products'));
    }
}
