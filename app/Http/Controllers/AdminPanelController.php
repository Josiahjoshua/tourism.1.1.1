<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function news_article()
    {
        return view('admin_panel.news_article_list');
    }

    public function publication()
    {
        return view('admin_panel.publication_list');
    }
}
