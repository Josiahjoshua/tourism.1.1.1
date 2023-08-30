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
            'resources_products' => ResourcesProduct::all(),
            'news_articles' => NewsArticle::all(),
        ];

        return view($templatePath, $data);
    }

    public function articledetail($language, $article_id) {
        $templateName = 'article_detail';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $article = NewsArticle::findOrFail($article_id);

        $data = [
            'current_language' => $language,
        ];

        return view($templatePath, compact('article'), $data, );

    }

}
