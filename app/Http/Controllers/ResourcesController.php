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
            'news_articles' => NewsArticle::all(),
            'resources_products' => ResourcesProduct::all()
        ];

        return view($templatePath, $data);
    }

    public function productdetail($language, $product_id) {
        $templateName = 'product_detail';
        $templatePath = $this->getTemplatePath($language, $templateName);

        $product = ResourcesProduct::findOrFail($product_id);

        $data = [
            'current_language' => $language,
        ];

        return view($templatePath, compact('product'), $data);

    }
}
