<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderImagesBanner;
use App\News;
use App\About;
use App\Products;
use App\Services;
use App\ServiceCategory;
use App\ProductsCategory;
use App\NewsCategory;
use App\AboutCategory;
use App\ProductImage;
class PageController extends Controller
{
    public function index(){
        $banner = SliderImagesBanner::get();
        $news = News::orderBy('id','desc')->paginate(4);
        $products = Products::orderBy('id','desc')->paginate(8);
        $proOne = Products::orderBy('id','desc')->first();
    	return view('front.pages.index',compact(['banner','news','products','proOne']));
    }

    //about
    public function about(){
        $about = About::where('about_category_id','=','0')->first();
    	return view('front.pages.about',compact(['about']));
    }
    public function aboutDetail($id){
        $about = About::where('about_category_id','=',$id)->first();
        return view('front.pages.about_detail',compact(['about']));
    }
    //end about



    //service
	public function service($id){
        $service = Services::where('service_category_id','=',$id)->paginate(3);
        return view('front.pages.service',compact('service'));
    }
    public function serviceDetail($id){
        $service = Services::where('id','=',$id)->first();
    	return view('front.pages.service_detail',compact(['service']));
    }
    //end service


    //product
    public function product($id){
        $product = Products::where('product_category_id','=',$id)->paginate(8);
    	return view('front.pages.product',compact('product'));
    }
    public function productDetail($id){
    	return view('front.pages.product_detail');
    }
    //end product

    //news
	public function news(){
    	return view('front.pages.news');
    }
    public function newsDetail(){
    	return view('front.pages.news_detail');
    }
    //end news
}
