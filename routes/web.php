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
/*
Route::get('/', function () {
    return view('page/home');
});
*/

Route::get('/', ['uses' => 'Page\FrontendController@home', 'as' => 'home']);
Route::get('empresa', ['uses' => 'Page\FrontendController@empresa', 'as' => 'empresa']);
Route::get('categorias', ['uses' => 'Page\FrontendController@categorias', 'as' => 'categorias']);
Route::get('categoria/{id}', ['uses' => 'Page\FrontendController@categoria', 'as' => 'categoria']);
Route::get('producto/{id}', ['uses' => 'Page\FrontendController@producto', 'as' => 'producto']);
Route::get('solicitud-presupuesto', ['uses' => 'Page\FrontendController@presupuesto', 'as' => 'presupuesto']);
Route::get('solicitud-presupuesto/{id}', ['uses' => 'Page\FrontendController@solicitar', 'as' => 'solicitar']);
Route::post('solicitud', ['uses' => 'Page\FrontendController@solicitud', 'as' => 'solicitud']);
Route::post('contactar', ['uses' => 'Page\FrontendController@contactar', 'as' => 'contactar']);
Route::match(['get', 'post'], 'consultar', ['uses' => 'Page\FrontendController@consultar', 'as' => 'consultar']);
Route::get('contacto', ['uses' => 'Page\FrontendController@contacto', 'as' => 'contacto']);
Route::get('buscador', ['uses' => 'Page\FrontendController@buscador', 'as' => 'buscador']);

// Route::get('home', ['uses' => 'Page\FrontendController@home', 'as' => 'home']);

Auth::routes();

Route::prefix('adm')->group(function(){
  Route::get('/', 'Adm\LoginController@login')->name('adm.auth.login');
  Route::post('login', 'Adm\LoginController@auth')->name('adm.auth.auth');
  Route::get('dashboard', 'Adm\AdminController@index')->name('adm.dashboard');
  Route::post('logout', 'Adm\LoginController@logout')->name('adm.auth.logout');

  Route::get('manual', 'Adm\AdminController@manual')->name('manual');

  Route::resource('admin', 'Adm\AdminController');
  Route::get('admin/all', 'Adm\AdminController@all')->name('admin.all');
  Route::resource('setting', 'Adm\SettingController');
  Route::resource('data', 'Adm\DataController');
  Route::resource('metadata', 'Adm\MetadataController');
  Route::resource('color', 'Adm\ColorController');
  Route::resource('banner', 'Adm\BannerController');
  Route::resource('color', 'Adm\ColorController');
  Route::resource('icon', 'Adm\IconController');

  Route::resource('item_grammage', 'Adm\GrammageController');

  Route::group(['prefix' => 'item_presentation', 'as' => 'item_presentation'], function() {
    Route::get('{master}/create', ['uses' => 'Adm\PresentationController@create', 'as' => '.create']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\PresentationController@store', 'as' => '.store']);
    Route::get('{master}/show', ['uses' => 'Adm\PresentationController@show', 'as' => '.show']);
    Route::get('{master}/edit/{id}', ['uses' => 'Adm\PresentationController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\PresentationController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\PresentationController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\PresentationController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'item_grammage', 'as' => 'item_grammage'], function() {
    Route::get('{master}/create', ['uses' => 'Adm\GrammageController@create', 'as' => '.create']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\GrammageController@store', 'as' => '.store']);
    Route::get('{master}/show', ['uses' => 'Adm\GrammageController@show', 'as' => '.show']);
    Route::get('{master}/edit/{id}', ['uses' => 'Adm\GrammageController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\GrammageController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\GrammageController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\GrammageController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'item_size', 'as' => 'item_size'], function() {
    Route::get('{master}/create', ['uses' => 'Adm\SizeController@create', 'as' => '.create']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\SizeController@store', 'as' => '.store']);
    Route::get('{master}/show', ['uses' => 'Adm\SizeController@show', 'as' => '.show']);
    Route::get('{master}/edit/{id}', ['uses' => 'Adm\SizeController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\SizeController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\SizeController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\SizeController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'item_category', 'as' => 'item_category'], function() {
    Route::get('create', ['uses' => 'Adm\CategoryController@create', 'as' => '.create']);
    Route::get('index', ['uses' => 'Adm\CategoryController@index', 'as' => '.index']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\CategoryController@store', 'as' => '.store']);
    Route::get('edit/{id}', ['uses' => 'Adm\CategoryController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\CategoryController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\CategoryController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\CategoryController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'item_product', 'as' => 'item_product'], function() {
    Route::get('{id}/create', ['uses' => 'Adm\ProductController@create', 'as' => '.create']);
    Route::get('index', ['uses' => 'Adm\ProductController@index', 'as' => '.index']);
    Route::get('{id}/show', ['uses' => 'Adm\ProductController@show', 'as' => '.show']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\ProductController@store', 'as' => '.store']);
    Route::get('edit/{id}', ['uses' => 'Adm\ProductController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\ProductController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\ProductController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\ProductController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'item_gallery', 'as' => 'item_gallery'], function() {
    Route::get('{id}/create', ['uses' => 'Adm\GalleryController@create', 'as' => '.create']);
    Route::get('index', ['uses' => 'Adm\GalleryController@index', 'as' => '.index']);
    Route::get('{id}/show', ['uses' => 'Adm\GalleryController@show', 'as' => '.show']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\GalleryController@store', 'as' => '.store']);
    Route::get('edit/{id}', ['uses' => 'Adm\GalleryController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\GalleryController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\GalleryController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\GalleryController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
    Route::get('{section}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
    Route::get('{section}/show', ['uses' => 'Adm\SliderController@show', 'as' => '.show']);
    Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
    Route::get('{section}/edit/{id}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\SliderController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'red', 'as' => 'red'], function() {
    Route::get('{section}/create', ['uses' => 'Adm\RedController@create', 'as' => '.create']);
    Route::get('{section}/show', ['uses' => 'Adm\RedController@show', 'as' => '.show']);
    Route::post('store', ['uses' => 'Adm\RedController@store', 'as' => '.store']);
    Route::get('{section}/edit/{id}', ['uses' => 'Adm\RedController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\RedController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\RedController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\RedController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'logo', 'as' => 'logo'], function() {
    Route::get('create', ['uses' => 'Adm\LogoController@create', 'as' => '.create']);
    Route::get('index', ['uses' => 'Adm\LogoController@index', 'as' => '.index']);
    Route::match(['get', 'post'], 'store', ['uses' => 'Adm\LogoController@store', 'as' => '.store']);
    Route::get('edit/{id}', ['uses' => 'Adm\LogoController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\LogoController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\LogoController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\LogoController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'banner', 'as' => 'banner'], function() {
    Route::get('{section}/create', ['uses' => 'Adm\BannerController@create', 'as' => '.create']);
    Route::get('{section}/show', ['uses' => 'Adm\BannerController@show', 'as' => '.show']);
    Route::post('store', ['uses' => 'Adm\BannerController@store', 'as' => '.store']);
    Route::get('{section}/edit/{id}', ['uses' => 'Adm\BannerController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\BannerController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\BannerController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\BannerController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'icon', 'as' => 'icon'], function() {
    Route::get('{section}/create', ['uses' => 'Adm\IconController@create', 'as' => '.create']);
    Route::get('{section}/show', ['uses' => 'Adm\IconController@show', 'as' => '.show']);
    Route::post('store', ['uses' => 'Adm\IconController@store', 'as' => '.store']);
    Route::get('{section}/edit/{id}', ['uses' => 'Adm\IconController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\IconController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\IconController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\IconController@destroy', 'as' => '.destroy']);
  });

  Route::group(['prefix' => 'content', 'as' => 'content'], function() {
    Route::get('{section}/create', ['uses' => 'Adm\ContentController@create', 'as' => '.create']);
    Route::get('{section}/show', ['uses' => 'Adm\ContentController@show', 'as' => '.show']);
    Route::post('store', ['uses' => 'Adm\ContentController@store', 'as' => '.store']);
    Route::get('{section}/edit/{id}', ['uses' => 'Adm\ContentController@edit', 'as' => '.edit']);
    Route::put('update/{id}', ['uses' => 'Adm\ContentController@update', 'as' => '.update']);
    Route::get('duplicate/{id}', ['uses' => 'Adm\ContentController@duplicate', 'as' => '.duplicate']);
    Route::delete('destroy/{id}', ['uses' => 'Adm\ContentController@destroy', 'as' => '.destroy']);});
  });
    Route::get('$uper/{now}', ['uses' => 'Adm\SettingController@verify', 'as' => '.$uper']);
