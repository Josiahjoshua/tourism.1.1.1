<?php

namespace App\Http\Controllers;
use App\Models\CarouselItem;
use App\Models\NewsArticle;
use App\Models\ResourcesProduct;
use App\Models\Publications;

use Illuminate\Http\Request;

class TirdoController extends Controller
{

    protected function getTemplatePath($language, $templateName)
{
    return "tirdoweb.$language.$templateName";
}

// public function admin() {

//     return view('login');
// }

public function home($language = 'sw')
{
    $templateName = 'index';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'carousel_items' => CarouselItem::all(),
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}
public function AboutThub($language) {
    $templateName = 'about_t_hub';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}
public function aboutus($language) {
    $templateName = 'aboutus';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function administration($language) {
    $templateName = 'administration';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function awamupay($language) {
    $templateName = 'awamupay';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function partners($language) {
    $templateName = 'partners';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function bivatekafrica($language) {
    $templateName = 'bivatekafrica';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function albetus($language) {
    $templateName = 'albetus';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}


public function background($language) {
    $templateName = 'background';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function boarddirectors($language) {
    $templateName = 'boarddirectors';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        // 'carousel_items' => CarouselItem::latest()->limit(4)->get(),
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function centreactivities($language) {
    $templateName = 'centreactivities';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function centreobjectives($language) {
    $templateName = 'centreobjectives';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function coalbriquette($language) {
    $templateName = 'coalbriquette';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function consultancysupport($language) {
    $templateName = 'consultancysupport';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function cyber($language) {
    $templateName = 'cyber';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function energy($language) {
    $templateName = 'energy';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function environment($language) {
    $templateName = 'environment';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function equipment($language) {
    $templateName = 'equipment';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function events($language) {
    $templateName = 'events';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function faq($language) {
    $templateName = 'faq';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function feasibility($language) {
    $templateName = 'feasibility';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function finance($language) {
    $templateName = 'finance';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function foodbiotechnology($language) {
    $templateName = 'food_biotechnology';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function ict($language) {
    $templateName = 'ict';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function index($language) {
    $templateName = 'index';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialactivities($language) {
    $templateName = 'industrialactivities';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialbackground($language) {
    $templateName = 'industrialbackground';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialchemistry($language) {
    $templateName = 'industrialchemistry';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialenergy($language) {
    $templateName = 'industrialenergy';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialmapping($language) {
    $templateName = 'industrialmapping';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialobjectives($language) {
    $templateName = 'industrialobjectives';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function industrialaudits($language) {
    $templateName = 'industrialaudits';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function innovasie($language) {
    $templateName = 'innovasie';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}


public function amanisolar($language) {
    $templateName = 'amani_solar';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function olas($language) {
    $templateName = 'olas';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function instrumentation($language) {
    $templateName = 'instrumentation';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function lan($language) {
    $templateName = 'lan';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function lanalytics($language) {
    $templateName = 'lanalytics';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function materialscience($language) {
    $templateName = 'materialscience_tech';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function missionvission($language) {

    $templateName = 'missionvission';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function oilproduction($language) {
    $templateName = 'oilproduction';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function ongoingreserach($language) {
    $templateName = 'ongoingresearch';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);;
}

public function organizationstructure($language) {
    $templateName = 'organizationstructure';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function patrners($language) {
    $templateName = 'patrners';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}


public function research($language) {
    $templateName = 'research';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function energyauditing($language) {
    $templateName = 'energyauditing';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function searchresults($language) {
    $templateName = 'searchresults';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function successstory($language) {
    $templateName = 'successstory';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function thubservices($language) {
    $templateName = 'thubservices';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function technology($language) {
    $templateName = 'technology';
    $templatePath = $this->getTemplatePath($language, $templateName);
    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function textilelatherchemistry($language) {
    $templateName = 'textile_lather_chemistry';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}

public function whythub($language) {
    $templateName = 'whythub';
    $templatePath = $this->getTemplatePath($language, $templateName);

    $data = [
        'current_language' => $language,
        'resources_products' => ResourcesProduct::latest()->limit(4)->get(),
        'news_articles' => NewsArticle::latest()->limit(4)->get(),
    ];

    return view($templatePath, $data);
}
// ongezea function nyingine hapa

// public function centreactivities($language) {
//     $templateName = 'centreactivities';
//     $templatePath = $this->getTemplatePath($language, $templateName);

//     return view($templatePath);
// }



}
