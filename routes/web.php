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



Route::get('/','PageController@index')->name('home');
Route::get('/home','PageController@index')->name('home');
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









