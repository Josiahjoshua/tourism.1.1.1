<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsArticle;
use App\Models\ResourcesProduct;
use App\Models\Publications;


class NewsController extends Controller
{

    protected function getTemplatePath($language, $templateName)
    {
        return "newsapp.$language.$templateName";
    }


    public function all_articles($language) {
        $templateName = 'all_articles';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $data = [
            'current_language' => $language,
            // 'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            'news_articles' => NewsArticle::latest()->get(),

        ];

        return view($templatePath, $data);
    }

    public function articledetail($language, $article_id) {
        $templateName = 'article_detail';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $article = NewsArticle::findOrFail($article_id);

        $data = [
            'current_language' => $language,
            'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
            'news_articles' => NewsArticle::latest()->limit(4)->get()
        ];

        return view($templatePath, compact('article'), $data, );

    }

}
