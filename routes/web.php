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
Route::redirect('/home', '/manage/dashboard');
Route::redirect('/manage', '/manage/dashboard');

Route::prefix('admin/dashboard')->group(function() {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login')->name('login.submit');
    // Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    // Password reset routes
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});
Route::prefix('manage')->middleware('role:superadministrator|administrator|user')->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('user','UserController',['only' => ['create','edit','show','update']]);

    Route::resource('product','ProductController');
    Route::get('product/{id}/publish','ProductController@publish')->name('product.publish');
    Route::get('product/{id}/unpublish','ProductController@unpublish')->name('product.unpublish');
    Route::get('{id}/featured',  'ProductController@setAsfeatured')->name('feature.product');
	Route::get('{id}/removefeatured', 'ProductController@removeAsfeatured')->name('remove.feature');

    Route::resource('product-category', 'CategoryController');
    Route::resource('media','MediaController');
    Route::resource('material','MaterialController');

    Route::resource('page','PageController');
    Route::get('page/{id}/publish','PageController@publish')->name('page.publish');
    Route::get('page/{id}/unpublish','PageController@unpublish')->name('page.unpublish');
    Route::resource('page-section','ContentController',['only' => 'destroy']);
    Route::resource('setting', 'SettingController',['only' => ['index','store','update']]);

    Route::resource('team', 'TeamController');    
    Route::post('updateOrder', 'TeamController@updateOrder')->name('updateOrder');

    Route::resource('home', 'HomeController',['only' => ['index','create','store','update']]);    

    Route::resource('/faq' ,'FaqController');
    Route::resource('/process' ,'ProcessController');
});
// Route::prefix('ajax')->group(function () {
// 	Route::post('updateOrder', 'TeamController@updateOrder')->name('updateOrder');
// });
Route::name('frontend.')->group(function () {
    Route::get('/', 'FrontendController@getIndex')->name('index');
    Route::get('/get-inspired', 'FrontendController@getInspired')->name('inspire');
    Route::get('/design-your-rug', 'FrontendController@orderProcess')->name('design');
    Route::get('/rug-making-process', 'FrontendController@getDesign')->name('process');
    Route::get('/contact', 'FrontendController@getContact')->name('contact');
    Route::get('/about', 'FrontendController@getAbout')->name('about');
    Route::get('/product', 'FrontendController@getSingleProduct')->name('product');
    Route::get('/faq', 'FrontendController@getFAQ')->name('faq');

    Route::post('/custom-design', 'PostController@customDesign')->name('customDesign');
    Route::post('/contact', 'PostController@contact')->name('contact');

    Route::get('/{category}', 'FrontendController@getByCategory')->name('category');
    Route::get('/{category}/{slug}', 'FrontendController@getProduct')->name('product');
});