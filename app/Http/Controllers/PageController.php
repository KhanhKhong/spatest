<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderImagesBanner;
use App\News;
use App\NewLetter;
use App\About;
use App\Products;
use App\Services;
use App\ServiceCategory;
use App\ProductsCategory;
use App\NewsCategory;
use App\AboutCategory;
use App\ProductImage;
use Validator;
class PageController extends Controller
{
    public function index(){
        $banner = SliderImagesBanner::get();
        $news = News::orderBy('id','desc')->paginate(4);

        $products_1 = Products::where('product_category_id','=',1)->orderBy('id','desc')->paginate(8);
        $proOne_1 = Products::where('product_category_id','=',1)->orderBy('id','desc')->first();

        $products_2 = Products::where('product_category_id','=',2)->orderBy('id','desc')->paginate(8);
        $proOne_2 = Products::where('product_category_id','=',2)->orderBy('id','desc')->first();

        $products_3 = Products::where('product_category_id','=',3)->orderBy('id','desc')->paginate(8);
        $proOne_3 = Products::where('product_category_id','=',3)->orderBy('id','desc')->first();

        $products_4 = Products::where('product_category_id','=',4)->orderBy('id','desc')->paginate(8);
        $proOne_4 = Products::where('product_category_id','=',4)->orderBy('id','desc')->first();

        $products_5 = Products::where('product_category_id','=',5)->orderBy('id','desc')->paginate(8);
        $proOne_5 = Products::where('product_category_id','=',5)->orderBy('id','desc')->first();

        $products_6 = Products::where('product_category_id','=',6)->orderBy('id','desc')->paginate(8);
        $proOne_6 = Products::where('product_category_id','=',6)->orderBy('id','desc')->first();

        $products_7 = Products::where('product_category_id','=',7)->orderBy('id','desc')->paginate(8);
        $proOne_7 = Products::where('product_category_id','=',7)->orderBy('id','desc')->first();

    	return view('front.pages.index',
            compact(['banner','news','products_1','proOne_1','products_2','proOne_2','products_3','proOne_3','products_4','proOne_4','products_5','proOne_5','products_6','proOne_6','products_7','proOne_7']));
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
        $product = Products::where('id','=',$id)->first();
        $thumbnail = ProductImage::where('product_id','=',$id)->get();
    	return view('front.pages.product_detail',compact(['product','thumbnail']));
    }
    //end product

    //news
    public function newsmain(){
        $news = News::orderBy('id','desc')->paginate(4);
        return view('front.pages.news',compact(['news']));
    }

	public function news($id){
        $news = News::where('news_category_id','=',$id)->orderBy('id','desc')->paginate(4);
    	return view('front.pages.news',compact(['news']));
    }
    public function newsDetail($id){
        $news = News::where('id','=',$id)->first();
    	return view('front.pages.news_detail',compact(['news']));
    }
    //end news


    //footer new letter
    public function newletterCreate(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
        }
        if(!empty($request->email)){
            $letter = NewLetter::first();
            if(empty($letter)){
                $letter->email = $request->email;
                $letter->save();
            }else{
                $letter = NewLetter::create([
                    'email' => $request->get('email'),
                ]);
            }
            
        }
        return redirect('/');
    }


    //end footer new letter
}
