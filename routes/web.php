<?php

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

use App\Http\Controllers\FrontController;

Route::get('/',                          'FrontController@getIndex');
Route::get('/search',                    'FrontController@getSearch');
Route::get('/cart',                    'FrontController@getCart');
// Route::get('/cart',                    'CartController@index')->name('cartIndex');
Route::get('/retail',                    'FrontController@getRetail');
Route::get('/retail-product/{slug}',     'FrontController@getRetailProduct');
Route::get('/retail-offer/{slug}',       'FrontController@getRetailOffer');
Route::get('/branding',                  'FrontController@getBranding');
Route::get('/branding-product/{slug}',   'FrontController@getBrandingProduct');
Route::get('/branding-type/{slug}',      'FrontController@getBrandingOffer');
Route::get('/corporate',                 'FrontController@getCorporate');
Route::get('/corporate-product/{slug}',  'FrontController@getCorporateProduct');

Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function () {
    Route::get('/',          'AdminController@getIndex');
    Route::get('/all',       'AdminController@getAll');
    Route::get('/index',     'AdminController@getIndexPage');

    // RETAIL PAGE
    Route::get('/retail-page',             'AdminController@getRetailPage');
    Route::get('/retail-offers',           'AdminController@getRetailOffers');
    Route::get('/retail-categories',       'AdminController@getRetailCategories');
    Route::get('/retail-offer/{id}',       'AdminController@getRetailOfferItem');
    Route::get('/retail-category/{id}',    'AdminController@getRetailCategoryItem');
    Route::get('/retail-category/retail-product/{id}',     'AdminController@getRetailProductItem');
    Route::get('/retail-color/{id}',       'AdminController@getRetailColorItem');

    // BRANDING PAGE
    Route::get('/branding-page',                'AdminController@getBrandingPage');
    Route::get('/branding-types',               'AdminController@getBrandingTypes');
    Route::get('/branding-type/{id}',           'AdminController@getBrandingTypeItem');
    Route::get('/branding-categories',          'AdminController@getBrandingCategories');
    Route::get('/branding-category/{id}',       'AdminController@getBrandingCategoryItem');
    Route::get('/branding-category/branding-subcategory/{id}',    'AdminController@getBrandingSubCategoryItem');
    Route::get('/branding-category/branding-subcategory/branding-product/{id}',        'AdminController@getBrandingProductItem');
    Route::get('/branding-color/{id}',          'AdminController@getBrandingColorItem');

    // CORPORATE PAGE
    Route::get('/corporate-page',           'AdminController@getCorporatePage');
    Route::get('/corporate-categories',     'AdminController@getCorporateCategories');
    Route::get('/corporate-category/{id}',  'AdminController@getCorporateCategoryItem');
    Route::get('/corporate-category/corporate-product/{id}',   'AdminController@getCorporateProductItem');
    Route::get('/corporate-color/{id}',     'AdminController@getCorporateColorItem');

    // Таксономия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});
