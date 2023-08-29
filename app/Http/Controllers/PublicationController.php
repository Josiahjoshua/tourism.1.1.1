<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publications;


class PublicationController extends Controller
{
    public function home()
    {
        $publication_items = Publications::all();

        return view('publication', ['publication_items' => $publication_items]);
    }


}
