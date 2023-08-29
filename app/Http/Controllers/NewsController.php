<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsArticle;


class NewsController extends Controller
{
    //
    public function home()
    {
        $news_articles = NewsArticle::all();

        return view('index', compact('news_articles'));
    }

    public function articledetails()
    {
        $news_articles = NewsArticle::all();

        return view('index', compact('news_articles'));
    }
}
