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


    // public function articledetail(NewsArticle $article, $language) {
    //     $templateName = 'product_detail';
    //     $templatePath = $this->getTemplatePath($language, $templateName);

    //     $data = [
    //         'current_language' => $language,
    //         'resources_products' => ResourcesProduct::all(),
    //         'news_product' => NewsArticle::all(),
    //     ];

    //     return view($templatePath, compact('product'), $data, );

    // }

    public function publication($language) {
        $templateName = 'all_publish';
        $templatePath = $this->getTemplatePath($language, $templateName);
        $publications = Publications::all();

        $data = [
            'current_language' => $language,
            'resources_products' => ResourcesProduct::all(),
            'news_articles' => NewsArticle::all(),
            'publications' => $publications
        ];

        return view($templatePath, $data);
    }


}
