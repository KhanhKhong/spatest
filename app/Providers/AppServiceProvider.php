<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\ProductCategory;
use App\AboutCategory;
use App\ServiceCategory;
use App\NewsCategory;
use App\Products;
use App\Header;
use App\Footer;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(255);
        View::composer(['layouts.app','front.pages.index','front.pages.about','front.pages.about_employee','front.pages.about_recruitment','front.pages.about_spa','front.pages.service','front.pages.service_detail','front.pages.product','front.pages.product_detail','front.pages.news','front.pages.news_detail','front.master','front.layouts.nav'],function($view){
            $cate_product = ProductCategory::with('children')->where('parent','=',0)->get();
            $cate_news = NewsCategory::with('children')->where('parent','=',0)->get();
            $cate_service = ServiceCategory::with('children')->where('parent','=',0)->get();
            $cate_about = AboutCategory::with('children')->where('parent','=',0)->get();
            $relatePro = Products::orderBy('id','desc')->paginate(4);
            $header = Header::first();
            $footer = Footer::first();
            $view->with(['cate_product'=>$cate_product, 'cate_news'=>$cate_news, 'cate_service'=>$cate_service, 'cate_about'=>$cate_about,'relatePro' => $relatePro,'header' => $header,'footer' => $footer]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
