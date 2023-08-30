<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publications;
use App\Models\ResourcesProduct;
use App\Models\NewsArticle;


class PublicationController extends Controller
{
    public function home()
    {
        $publication_items = Publications::all();

        return view('publication', ['publication_items' => $publication_items]);
    }


    protected function getTemplatePath($language, $templateName)
    {
        return "publications.$language.$templateName";
    }


    public function publications($language) {
        $templateName = 'all_publish';
        $templatePath = $this->getTemplatePath($language, $templateName);

        // $publications = Publications::all();

        $data = [
            'current_language' => $language,
            'resources_products' => ResourcesProduct::all(),
            'news_articles' => NewsArticle::all(),
            'publications' => Publications::all()
        ];

        // return $publications;

        return view($templatePath, $data);
    }


}
