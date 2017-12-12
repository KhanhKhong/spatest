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



Route::get('/home','PageController@index')->name('home');
Route::get('/','PageController@index')->name('home');
//about
Route::get('/about','PageController@about')->name('about');
Route::get('/about/detail/{id}','PageController@aboutDetail')->name('about.detail');
//service
Route::get('/service/{id}','PageController@service')->name('service');
Route::get('/service/detail/{id}','PageController@serviceDetail')->name('service.detail');
//product
Route::get('/product/{id}','PageController@product')->name('product');
Route::get('/product/detail/{id}','PageController@productDetail')->name('product.detail');
//news
Route::get('/newsmain','PageController@newsmain')->name('news.main');
Route::get('/news/{id}','PageController@news')->name('news');
Route::get('/news/detail/{id}','PageController@newsDetail')->name('news.detail');

// footer new letter
Route::post('/create-newletter','PageController@newletterCreate')->name('newletter.create');
// end footer new letter

//cart
Route::get('/cart', [
    'as' => 'page.cart',
    'uses' => 'CartController@cart'
]);

Route::get('/create-cart/{productId}', [
    'as' => 'cart.create',
    'uses' => 'CartController@cartCreate'
]);

Route::get('/edit-cart/{rowId}', [
    'as' => 'cart.edit',
    'uses' => 'CartController@cartEdit'
]);

Route::get('/renove-cart/{rowId}', [
    'as' => 'cart.remove',
    'uses' => 'CartController@cartRemove'
]);

Route::get('/bills', [
    'as' => 'bills',
    'uses' => 'CartController@bills'
]);

Route::post('/update-bills', [
    'as' => 'update.bills',
    'uses' => 'CartController@updateBills'
]);
//end cart

//email
Route::get('/mail', 'PageController@mail')->name('email.create');
//end email
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){
	//top header
	Route::get('/','AdminController@index')->name('admin');
	Route::post('/edit-header','AdminController@header')->name('header');
	//End top header

	//slider
	Route::get('/slider','AdminController@slider')->name('slider');
	Route::get('/edit-slider','AdminController@sliderEdit')->name('slider.edit');
	Route::post('/update-slider','AdminController@sliderUpdate')->name('slider.update');
	Route::get('/delete-slider','AdminController@sliderDelete')->name('slider.delete');
	//End slider
	//product
	Route::get('/product','AdminController@product')->name('product_admin');
	Route::get('/edit-product','AdminController@productEdit')->name('product.edit');
	Route::post('/update-product','AdminController@productUpdate')->name('product.update');
	Route::get('/delete-product','AdminController@productDelete')->name('product.delete');
	//End product

	// Route product Categories
    Route::get('/categories','AdminController@categories')->name('categories');
    Route::get('/edit-category','AdminController@editCategory')->name('create_category');
    Route::post('/update-category','AdminController@updateCategory')->name('update_category');
    Route::get('/delete-category','AdminController@deleteCategory')->name('delete_category');
    // End Route product Categories

    // Route About Categories
    Route::get('/about-categories','AdminController@aboutCategories')->name('about.categories');
    Route::get('/edit-about-category','AdminController@editAboutCategory')->name('about.create_category');
    Route::post('/update-about-category','AdminController@updateAboutCategory')->name('about.update_category');
    Route::get('/delete-about-category','AdminController@deleteAboutCategory')->name('about.delete_category');
    // End Route About Categories

    // Route News Categories
    Route::get('/news-categories','AdminController@newsCategories')->name('news.categories');
    Route::get('/edit-news-category','AdminController@editNewsCategory')->name('news.create_category');
    Route::post('/update-news-category','AdminController@updateNewsCategory')->name('news.update_category');
    Route::get('/delete-news-category','AdminController@deleteNewsCategory')->name('news.delete_category');
    // End Route News Categories

    // Route service Categories
    Route::get('/service-categories','AdminController@serviceCategories')->name('service.categories');
    Route::get('/edit-service-category','AdminController@editServiceCategory')->name('service.create_category');
    Route::post('/update-service-category','AdminController@updateServiceCategory')->name('service.update_category');
    Route::get('/delete-service-category','AdminController@deleteServiceCategory')->name('service.delete_category');
    // End Route service Categories

    //about
	Route::get('/about','AdminController@about')->name('about_admin');
	Route::get('/edit-about','AdminController@aboutEdit')->name('about.edit');
	Route::post('/update-about','AdminController@aboutUpdate')->name('about.update');
	Route::get('/delete-about','AdminController@aboutDelete')->name('about.delete');
	//End about

	//news
	Route::get('/news','AdminController@news')->name('news_admin');
	Route::get('/edit-news','AdminController@newsEdit')->name('news.edit');
	Route::post('/update-news','AdminController@newsUpdate')->name('news.update');
	Route::get('/delete-news','AdminController@newsDelete')->name('news.delete');
	//End news

	//service
	Route::get('/service','AdminController@service')->name('service_admin');
	Route::get('/edit-service','AdminController@serviceEdit')->name('service.edit');
	Route::post('/update-service','AdminController@serviceUpdate')->name('service.update');
	Route::get('/delete-service','AdminController@serviceDelete')->name('service.delete');
	//End service

	//footer
	Route::get('/footer','AdminController@footer')->name('footer');
	Route::post('/edit-footer','AdminController@footerUpdate')->name('footer.update');

	Route::get('/delete-newletter','AdminController@newletterDelete')->name('newletter.delete');
	//End footer


	//schedule
	Route::get('/schedule','AdminController@schedule')->name('schedule_admin');
	Route::get('/edit-schedule','AdminController@scheduleEdit')->name('schedule.edit');
	Route::post('/update-schedule','AdminController@scheduleUpdate')->name('schedule.update');
	Route::get('/delete-schedule','AdminController@scheduleDelete')->name('schedule.delete');
	//End schedule


	//Bill
	Route::get('/bills','AdminController@bills')->name('bills_admin');
	// Route::post('/bills','AdminController@billView')->name('bills.view');
	Route::get('/delete-bills','AdminController@billDelete')->name('bills.delete');
	//End Bill
});


