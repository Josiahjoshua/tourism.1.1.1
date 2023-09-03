<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TirdoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\PublicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return redirect()->route('home', ['language' => 'sw']);
})->name('root');



$language = 'sw';

// Route::get('/admin', [TirdoController::class, 'admin'])
// ->name('admin');

Route::get('/{language}/home', [TirdoController::class, 'home'])
    ->name('home');

Route::get('/{language}/about_T_hub', [TirdoController::class, 'AboutThub'])
    ->name('about_T_hub');

Route::get('/{language}/aboutus', [TirdoController::class, 'aboutus'])
    ->name('aboutus');

Route::get('/{language}/administration', [TirdoController::class, 'administration'])
    ->name('administration');

Route::get('/{language}/awamupay', [TirdoController::class, 'awamupay'])
    ->name('awamupay');

Route::get('/{language}/background', [TirdoController::class, 'background'])
    ->name('background');

Route::get('/{language}/boarddirectors', [TirdoController::class, 'boarddirectors'])
    ->name('boarddirectors');

Route::get('/{language}/centreactivities', [TirdoController::class, 'centreactivities'])
    ->name('centreactivities');

Route::get('/{language}/centreobjectives', [TirdoController::class, 'centreobjectives'])
    ->name('centreobjectives');

Route::get('/{language}/coalbriquette', [TirdoController::class, 'coalbriquette'])
    ->name('coalbriquette');

Route::get('/{language}/consultancysupport', [TirdoController::class, 'consultancysupport'])
    ->name('consultancysupport');

Route::get('/{language}/cyber', [TirdoController::class, 'cyber'])
    ->name('cyber');

Route::get('/{language}/energy', [TirdoController::class, 'energy'])
    ->name('energy');

Route::get('/{language}/environment', [TirdoController::class, 'environment'])
    ->name('environment');

Route::get('/{language}/equipment', [TirdoController::class, 'equipment'])
    ->name('equipment');

Route::get('/{language}/events', [TirdoController::class, 'events'])
    ->name('events');

Route::get('/{language}/faq', [TirdoController::class, 'faq'])
    ->name('faq');

Route::get('/{language}/feasibility', [TirdoController::class, 'feasibility'])
    ->name('feasibility');

Route::get('/{language}/finance', [TirdoController::class, 'finance'])
    ->name('finance');

Route::get('/{language}/foodbiotechnology', [TirdoController::class, 'foodbiotechnology'])
    ->name('foodbiotechnology');

Route::get('/{language}/ict', [TirdoController::class, 'ict'])
    ->name('ict');

Route::get('/{language}/index', [TirdoController::class, 'index'])
    ->name('index');

Route::get('/{language}/industrial_activities', [TirdoController::class, 'industrialactivities'])
    ->name('industrial_activities');

Route::get('/{language}/industrialbackground', [TirdoController::class, 'industrialbackground'])
    ->name('industrialbackground');

Route::get('/{language}/industrialchemistry', [TirdoController::class, 'industrialchemistry'])
    ->name('industrialchemistry');

Route::get('/{language}/industrialenergy', [TirdoController::class, 'industrialenergy'])
    ->name('industrialenergy');

Route::get('/{language}/industrialmapping', [TirdoController::class, 'industrialmapping'])
    ->name('industrialmapping');

Route::get('/{language}/industrialobjectives', [TirdoController::class, 'industrialobjectives'])
    ->name('industrialobjectives');

Route::get('/{language}/industrialaudits', [TirdoController::class, 'industrialaudits'])
    ->name('industrialaudits');

Route::get('/{language}/innovasie', [TirdoController::class, 'innovasie'])
    ->name('innovasie');

Route::get('/{language}/amanisolar', [TirdoController::class, 'amanisolar'])
    ->name('amanisolar');

Route::get('/{language}/olas', [TirdoController::class, 'olas'])
    ->name('olas');

Route::get('/{language}/instrumentation', [TirdoController::class, 'instrumentation'])
    ->name('instrumentation');

Route::get('/{language}/lan', [TirdoController::class, 'lan'])
    ->name('lan');

Route::get('/{language}/lanalytics', [TirdoController::class, 'lanalytics'])
    ->name('lanalytics');

Route::get('/{language}/majaribio', [TirdoController::class, 'majaribio'])
    ->name('majaribio');

Route::get('/{language}/materialsciencetech', [TirdoController::class, 'materialscience'])
    ->name('materialsciencetech');

Route::get('/{language}/missionvission', [TirdoController::class, 'missionvission'])
    ->name('missionvission');

Route::get('/{language}/oilproduction', [TirdoController::class, 'oilproduction'])
    ->name('oilproduction');

Route::get('/{language}/ongoingresearch', [TirdoController::class, 'ongoingreserach'])
    ->name('ongoingresearch');

Route::get('/{language}/organizationstructure', [TirdoController::class, 'organizationstructure'])
    ->name('organizationstructure');

Route::get('/{language}/partners', [TirdoController::class, 'partners'])
    ->name('partners');

Route::get('/{language}/publications', [PublicationController::class, 'publications'])
    ->name('publications');

Route::get('/{language}/research', [TirdoController::class, 'research'])
    ->name('research');

Route::get('/{language}/searchresults', [TirdoController::class, 'searchresults'])
    ->name('searchresults');

Route::get('/{language}/successstory', [TirdoController::class, 'successstory'])
    ->name('successstory');

Route::get('/{language}/thubservices', [TirdoController::class, 'thubservices'])
    ->name('thubservices');

Route::get('/{language}/technology', [TirdoController::class, 'technology'])
    ->name('technology');

Route::get('/{language}/textilelatherchemistry', [TirdoController::class, 'textilelatherchemistry'])
    ->name('textilelatherchemistry');

Route::get('/{language}/training', [TirdoController::class, 'training'])
    ->name('training');

Route::get('/{language}/whythub', [TirdoController::class, 'whythub'])
    ->name('whythub');

Route::get('/{language}/albetus', [TirdoController::class, 'albetus'])
    ->name('albetus');

Route::get('/{language}/bivatekafrica', [TirdoController::class, 'bivatekafrica'])
    ->name('bivatekafrica');


// all news articles
Route::get('newsapp/{language}/all_articles', [NewsController::class, 'all_articles'])
    ->name('news.all_articles');

// View single news article
Route::get('newsapp/{language}/article_details/{article_id}', [NewsController::class, 'articledetail'])
    ->name('news.article_detail');

// all resource product
Route::get('resources/{language}/all_product', [ResourcesController::class, 'all_product'])
    ->name('product.all_products');

// View single resource product
Route::get('resources/{language}/product_details/{product_id}', [ResourcesController::class, 'productdetail'])
    ->name('product.product_detail');



Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [LoginController::class, 'show_login'])->name('welcome');
    Route::get('login', [LoginController::class, 'show_login'])->name('login');
    Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

    Route::group(['middleware' => 'auth'], function (){
        Route::get('forgot_password', [LoginController::class, 'logout'])->name('forgot_password');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

        Route::post('reset_password', [HomeController::class, 'change_password'])->name('reset_password');
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::get('users', [UserController::class, 'user'])->name('admin.users');

        Route::get('news/articles', [AdminPanelController::class, 'news_article'])->name('admin.news_articles');

        Route::get('publish/publications', [AdminPanelController::class, 'publication'])->name('admin.publication_list');

        Route::get('carousel/items', [AdminPanelController::class, 'carousel_item'])->name('admin.carousel_items_list');

        Route::get('resouce/products', [AdminPanelController::class, 'resource_products'])->name('admin.resource_products_list');

    });
//    Voyager::routes();
});

//Auth::routes();


