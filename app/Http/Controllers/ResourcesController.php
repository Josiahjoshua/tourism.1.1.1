<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResourcesProduct;
use App\Models\NewsArticle;

class ResourcesController extends Controller
{
    public function home()
    {
        $resources_products = ResourcesProduct::all();

        return view('index', compact('resources_products'));
    }


    protected function getTemplatePath($language, $templateName)
    {
        return "resources.$language.$templateName";
    }


    public function all_product($language) {
        $templateName = 'all_products';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $data = [
            'current_language' => $language,
            'resources_products' => ResourcesProduct::all(),
            'news_articles' => NewsArticle::all(),
        ];

        return view($templatePath, $data);
    }

    public function productdetail(ResourcesProduct $product, $language) {
        $templateName = 'product_detail';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $data = [
            'current_language' => $language,
            'resources_products' => ResourcesProduct::all(),
            'news_articles' => NewsArticle::all(),
        ];

        return view($templatePath, compact('product'), $data, );

    }
}
