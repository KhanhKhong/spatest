<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\NewLetter;
use App\About;
use App\Footer;
use App\AboutCategory;
use App\News;
use App\NewsCategory;
use App\Products;
use App\ProductImage;
use App\ProductCategory;
use App\Services;
use App\ServiceCategory;
use App\SliderImagesBanner;
use Intervention\Image\Facades\Image;
use File;
use Validator;
class AdminController extends Controller
{
    public function index(){
		$header = Header::first();
    	return view('admin.pages.top_menu',compact(['header']));
    }
    //header
    public function headerValidate(array $data){
    	return Validator::make($data, [
                'logo' => 'required',
                'facebook' => 'required',
                'google' => 'required',
                'twitter' => 'required',
                'pinterest' => 'required',
                'phone' => 'required|max:15',
        ]);
    }
    public function header(Request $reg){
    	$validator = $this->headerValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }
    	if(!empty($reg->header_id)){
    		$head = Header::find($reg->header_id);
			if($reg->hasFile('logo')){
				$logo = $reg->file('logo');
	            $strippedName = str_replace(' ', '', $logo->getClientOriginalName());
	            $imgName = date('Y-m-d-H-i-s') . $strippedName;
	            Image::make($logo->getRealPath())->resize(200, 200)->save(public_path() . '/source/images/' . $imgName, 60);
	    		$head->logo = $imgName;
	    		$head->facebook = $reg->facebook;
	    		$head->google = $reg->google;
	    		$head->twitter = $reg->twitter;
	    		$head->pinterest = $reg->pinterest;
	    		$head->phone = $reg->phone;
	    		$head->slogan = $reg->slogan;
	    		$head->save();
			}
    	}
    	return redirect('/admin');
    }
    // End header
    // slider
	public function slideValidate(array $data){
        return Validator::make($data, [
                'title' => 'required|max:100',
                'sub_title' => 'required|max:100',
                'image' => 'required|max:1000',
        ]);
    }
    public function slider(){
    	$slider = SliderImagesBanner::orderBy('id','desc')->paginate(10);
    	return view('admin.pages.slider.index',compact(['slider']));
    }

    public function sliderEdit(Request $reg){
    	if(isset($reg->id)){
            $editItems = SliderImagesBanner::where('id','=',$reg->id)->first();
        }
        return view('admin.pages.slider.edit',compact(['editItems']));
    }

    public function sliderUpdate(Request $reg){
    	$validator = $this->slideValidate($reg->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($reg->all())
                ->withErrors($validator->errors());
        }

        if(!empty($reg->file('banner'))){
            $image = $reg->file('banner');
            $strippedName = str_replace(' ', '', $image->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($image->getRealPath())->resize(890, 388)->save(public_path() . '/source/images/' . $imgName, 60);
        }

        $slide_id = $reg->slide_id;
        if(!empty($reg->title) && !empty($slide_id)){
            $delPicture = SliderImagesBanner::where('id','=',$slide_id)->first();
            if (!empty($delPicture)) {
                File::delete('source/images/' . $delPicture->image);
            }
            $slides = SliderImagesBanner::find($slide_id);
            $slides->title = $reg->title;
            $slides->sub_title = $reg->sub_title;
            $slides->image = $imgName;
            $slides->save();
        }else{
            $slides = SliderImagesBanner::create([
                'title' => $reg->title,
                'sub_title' =>$reg->sub_title,
                'image' => $imgName,
            ]);
        }

        return redirect('/admin/slider');
    }

    public function sliderDelete(Request $reg){

        $id = $reg->id;
        $slide = SliderImagesBanner::where('id','=',$id)->first();
        if(!empty($slide)) {
            File::delete('source/images/' . $slide->slide_picture);
            $slide->delete();
        }
    	return redirect('/admin/slider');
    }
    //End slider

    // product category

    public function categoryValidate(array $data){
        return Validator::make($data, [
                'title' => 'required',
        ]);
    }

    public function categories(){
        $categories = ProductCategory::orderBy('id','desc')->paginate(10);
        return view('admin.pages.product_categories.index',compact(['categories','parent']));
    }

    public function editCategory(Request $request){
        if(isset($request->id)){
            $editItems = ProductCategory::where('id','=',$request->id)->first();
        }
        $cates = ProductCategory::with('children')->where('parent','=',0)->get();
        return view('admin.pages.product_categories.edit',compact(['cates','editItems']));
    }

    public function updateCategory(Request $request){
        $validator = $this->categoryValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        $cate_id = $request->cate_id;
        if(!empty($request->title) && isset($cate_id)){
            $cate = ProductCategory::find($cate_id);
            // $cate = new ProductCategories;
            $cate->title = $request->title;
            $cate->parent = $request->parent;
            $cate->save();
        }else{
            $cate = ProductCategory::create([
                'title' => $request->get('title'),
                'parent' => $request->get('parent'),
            ]);
        }
        return redirect('/admin/categories');
    }

    public function deleteCategory(Request $request){

        $id = $request->id;
        $cate = ProductCategory::where('id','=',$id)->first();
        if(!empty($id)){
            $cate->delete();
        }
        return redirect('/admin/categories');
    }

    // End product category


    // product
    public function productValidate(array $data){
        return Validator::make($data, [
                'image' => 'required',
                'title' => 'required|max:100',
                'short_description' => 'required',
                'description' => 'required',
                'price_sale' => 'required|numeric|between:0,99.99',
                'price' => 'required|numeric|between:0,99.99',
                'hot' => 'required',
                'status' => 'required',
                'product_category_id' => 'required',
        ]);
    }
    public function product(){
        $product = Products::orderBy('id','desc')->paginate(10);
        return view('admin.pages.product.index',compact(['product']));
    }

    public function productEdit(Request $reg){
        if(isset($reg->id)){
            $editItems = Products::where('id','=',$reg->id)->first();
        }
        $cate = ProductCategory::all();
        return view('admin.pages.product.edit',compact(['cate','editItems']));
    }

    public function productUpdate(Request $reg){
        $validator = $this->productValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }
        if(!empty($reg->file('image'))){
            $picture = $reg->file('image');
            $strippedName = str_replace(' ', '', $picture->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($picture->getRealPath())->resize(600, 600)->save(public_path() . '/source/images/' . $imgName, 60);
        }

        $product_id = $reg->product_id;
        if(!empty($reg->title) && !empty($product_id)){
            $product = Products::find($product_id);
            $product->image = $imgName;
            $product->title = $reg->title;
            $product->price_sale = $reg->price_sale;
            $product->price = $reg->price;
            $product->hot = $reg->hot;
            $product->status = $reg->status;
            $product->short_description = $reg->short_description;
            $product->description = $reg->description;
            $product->product_category_id = $reg->product_category_id;
            $product->save();
        }else{
            $product = Products::create([
                'image' => $imgName,
                'title' => $reg->title,
                'price_sale' => $reg->price_sale,
                'price' => $reg->price,
                'hot' => $reg->hot,
                'status' => $reg->status,
                'short_description' => $reg->short_description,
                'description' => $reg->description,
                'product_category_id' => $reg->product_category_id,
            ]);
        }
        if(!empty($product_id)){
            $delPicture = Products::where('id','=',$product_id)->first();
            if (!empty($delPicture)) {
                File::delete('source/images/' . $delPicture->image);
            }
            $images = ProductImage::where('product_id','=',$product_id)->get();
            if(!empty($images)){
                foreach ($images as $image) {
                    File::delete('source/images/' . $image->image);
                }
                ProductImage::where('product_id','=',$product_id)->delete();
            }
            if ( $reg->hasFile( 'imageMulti' ) ) {
                $imageMultis = $reg->imageMulti;
                foreach ( $imageMultis as $imageMul ) {
                    $strippedName = str_replace(' ', '', $imageMul->getClientOriginalName());
                    $filename = date('Y-m-d-H-i-s') . $strippedName;
                    Image::make($imageMul->getRealPath())->resize(600, 600)->save(public_path() . '/source/images/' . $filename, 60);
                    $proImage                = new ProductImage();
                    $proImage->thumbnail         = $filename;
                    $proImage->product_id = $product_id;
                    $proImage->save();
                }
            }
        }else{
            $idProduct = Products::orderBy('id','desc')->first();
            if ( $reg->hasFile( 'imageMulti' ) ) {
                $imageMultis = $reg->imageMulti;
                foreach ( $imageMultis as $imageMul ) {
                    $strippedName = str_replace(' ', '', $imageMul->getClientOriginalName());
                    $filename = date('Y-m-d-H-i-s') . $strippedName;
                    Image::make($imageMul->getRealPath())->resize(600, 600)->save(public_path() . '/source/images/' . $filename, 60);
                        $proImage                = new ProductImage();
                        $proImage->thumbnail     = $filename;
                        $proImage->product_id = $idProduct->id;
                        $proImage->save();
                }
            }
        }
        return redirect('/admin/product');
    }

    public function productDelete(Request $reg){
        $id = $reg->id;
        $item = Products::where('id','=',$id)->first();
        if(!empty($item)) {
            File::delete('source/images/' . $item->picture);
            $images = ProductImage::where('product_id','=',$id)->get();
            if(!empty($images)){
                foreach ($images as $image) {
                    File::delete('source/images/' . $image->image);
                }
                ProductImage::where('product_id','=',$id)->delete();
            }
            $item->delete();
        }
        return redirect('/admin/product');
    }
    //End product


    // about category

    public function categoryAboutValidate(array $data){
        return Validator::make($data, [
                'title' => 'required',
        ]);
    }

    public function aboutCategories(){
        $categories = AboutCategory::orderBy('id','desc')->paginate(10);
        return view('admin.pages.about_categories.index',compact(['categories','parent']));
    }

    public function editAboutCategory(Request $request){
        if(isset($request->id)){
            $editItems = AboutCategory::where('id','=',$request->id)->first();
        }
        $cates = AboutCategory::with('children')->where('parent','=',0)->get();
        return view('admin.pages.about_categories.edit',compact(['cates','editItems']));
    }

    public function updateAboutCategory(Request $request){
        $validator = $this->categoryAboutValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        $cate_id = $request->cate_id;
        if(!empty($request->title) && isset($cate_id)){
            $cate = AboutCategory::find($cate_id);
            // $cate = new ProductCategories;
            $cate->title = $request->title;
            $cate->parent = $request->parent;
            $cate->save();
        }else{
            $cate = AboutCategory::create([
                'title' => $request->get('title'),
                'parent' => $request->get('parent'),
            ]);
        }
        return redirect('/admin/about-categories');
    }

    public function deleteAboutCategory(Request $request){

        $id = $request->id;
        $cate = AboutCategory::where('id','=',$id)->first();
        if(!empty($id)){
            $cate->delete();
        }
        return redirect('/admin/about-categories');
    }

    // End about category

    // news category
    public function categoryNewsValidate(array $data){
        return Validator::make($data, [
                'title' => 'required',
        ]);
    }

    public function newsCategories(){
        $categories = NewsCategory::orderBy('id','desc')->paginate(10);
        return view('admin.pages.news_categories.index',compact(['categories','parent']));
    }

    public function editNewsCategory(Request $request){
        if(isset($request->id)){
            $editItems = NewsCategory::where('id','=',$request->id)->first();
        }
        $cates = NewsCategory::with('children')->where('parent','=',0)->get();
        return view('admin.pages.news_categories.edit',compact(['cates','editItems']));
    }

    public function updateNewsCategory(Request $request){
        $validator = $this->categoryNewsValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        $cate_id = $request->cate_id;
        if(!empty($request->title) && isset($cate_id)){
            $cate = NewsCategory::find($cate_id);
            // $cate = new ProductCategories;
            $cate->title = $request->title;
            $cate->parent = $request->parent;
            $cate->save();
        }else{
            $cate = NewsCategory::create([
                'title' => $request->get('title'),
                'parent' => $request->get('parent'),
            ]);
        }
        return redirect('/admin/news-categories');
    }

    public function deleteNewsCategory(Request $request){

        $id = $request->id;
        $cate = NewsCategory::where('id','=',$id)->first();
        if(!empty($id)){
            $cate->delete();
        }
        return redirect('/admin/news-categories');
    }
    // End news category


    // service category
    public function categoryServiceValidate(array $data){
        return Validator::make($data, [
                'title' => 'required',
        ]);
    }

    public function serviceCategories(){
        $categories = ServiceCategory::orderBy('id','desc')->paginate(10);
        return view('admin.pages.service_categories.index',compact(['categories','parent']));
    }

    public function editServiceCategory(Request $request){
        if(isset($request->id)){
            $editItems = ServiceCategory::where('id','=',$request->id)->first();
        }
        $cates = ServiceCategory::with('children')->where('parent','=',0)->get();
        return view('admin.pages.service_categories.edit',compact(['cates','editItems']));
    }

    public function updateServiceCategory(Request $request){
        $validator = $this->categoryServiceValidate($request->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($request->all())
                            ->withErrors($validator->errors());
        }
        $cate_id = $request->cate_id;
        if(!empty($request->title) && isset($cate_id)){
            $cate = ServiceCategory::find($cate_id);
            // $cate = new ProductCategories;
            $cate->title = $request->title;
            $cate->parent = $request->parent;
            $cate->save();
        }else{
            $cate = ServiceCategory::create([
                'title' => $request->get('title'),
                'parent' => $request->get('parent'),
            ]);
        }
        return redirect('/admin/service-categories');
    }

    public function deleteServiceCategory(Request $request){

        $id = $request->id;
        $cate = ServiceCategory::where('id','=',$id)->first();
        if(!empty($id)){
            $cate->delete();
        }
        return redirect('/admin/service-categories');
    }
    // End service category

    // about
    public function aboutValidate(array $data){
        return Validator::make($data, [
                'description' => 'required',
        ]);
    }
    public function about(){
        $about = About::orderBy('id','desc')->paginate(10);
        return view('admin.pages.about.index',compact(['about']));
    }

    public function aboutEdit(Request $reg){
        if(isset($reg->id)){
            $editItems = About::where('id','=',$reg->id)->first();
        }
        $cate = AboutCategory::all();
        return view('admin.pages.about.edit',compact(['cate','editItems']));
    }

    public function aboutUpdate(Request $reg){
        $validator = $this->aboutValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }

        $about_id = $reg->about_id;
        if(!empty($about_id)){
            $about = About::find($about_id);
            $about->description = $reg->description;
            $about->about_category_id = $reg->about_category_id;
            $about->save();
        }else{
            $about = About::create([
                'description' => $reg->description,
                'about_category_id' => $reg->about_category_id,
            ]);
        }

        return redirect('/admin/about');
    }

    public function aboutDelete(Request $reg){
        $id = $reg->id;
        $item = About::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/about');
    }
    //End about

    // news
    public function newsValidate(array $data){
        return Validator::make($data, [
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
        ]);
    }
    public function news(){
        $news = News::orderBy('id','desc')->paginate(10);
        return view('admin.pages.news.index',compact(['news']));
    }

    public function newsEdit(Request $reg){
        if(isset($reg->id)){
            $editItems = News::where('id','=',$reg->id)->first();
        }
        $cate = NewsCategory::all();
        return view('admin.pages.news.edit',compact(['cate','editItems']));
    }

    public function newsUpdate(Request $reg){
        $validator = $this->newsValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }

        if(!empty($reg->file('image'))){
            $image = $reg->file('image');
            $strippedName = str_replace(' ', '', $image->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($image->getRealPath())->resize(468, 524)->save(public_path() . '/source/images/' . $imgName, 60);
        }

        $news_id = $reg->news_id;
        if(!empty($news_id)){
            $about = News::find($news_id);
            $about->image = $imgName;
            $about->title = $reg->title;
            $about->description = $reg->description;
            $about->news_category_id = $reg->news_category_id;
            $about->save();
        }else{
            $about = News::create([
                'image' => $imgName,
                'title' => $reg->title,
                'description' => $reg->description,
                'news_category_id' => $reg->news_category_id,
            ]);
        }

        return redirect('/admin/news');
    }

    public function newsDelete(Request $reg){
        $id = $reg->id;
        $item = News::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/news');
    }
    //End news


    // service
    public function serviceValidate(array $data){
        return Validator::make($data, [
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
        ]);
    }
    public function service(){
        $service = Services::orderBy('id','desc')->paginate(10);
        return view('admin.pages.service.index',compact(['service']));
    }

    public function serviceEdit(Request $reg){
        if(isset($reg->id)){
            $editItems = Services::where('id','=',$reg->id)->first();
        }
        $cate = ServiceCategory::all();
        return view('admin.pages.service.edit',compact(['cate','editItems']));
    }

    public function serviceUpdate(Request $reg){
        $validator = $this->serviceValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }

        if(!empty($reg->file('image'))){
            $image = $reg->file('image');
            $strippedName = str_replace(' ', '', $image->getClientOriginalName());
            $imgName = date('Y-m-d-H-i-s') . $strippedName;
            Image::make($image->getRealPath())->resize(450, 300)->save(public_path() . '/source/images/' . $imgName, 60);
        }
        $service_id = $reg->service_id;
        if(!empty($service_id)){
            $about = Services::find($service_id);
            $about->image = $imgName;
            $about->title = $reg->title;
            $about->description = $reg->description;
            $about->price = $reg->price;
            $about->service_category_id = $reg->service_category_id;
            $about->save();
        }else{
            $about = Services::create([
                'image' => $imgName,
                'title' => $reg->title,
                'description' => $reg->description,
                'price' => $reg->price,
                'service_category_id' => $reg->service_category_id,
            ]);
        }

        return redirect('/admin/service');
    }

    public function serviceDelete(Request $reg){
        $id = $reg->id;
        $item = Services::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/service');
    }
    //End service


    //footer
    public function footer(){
        $footer = Footer::first();
        $letter = NewLetter::paginate('10');
        return view('admin.pages.footer',compact(['footer','letter']));
    }
    public function footerValidate(array $data){
        return Validator::make($data, [
                'about_us' => 'required',
        ]);
    }
    public function footerUpdate(Request $reg){
        $validator = $this->footerValidate($reg->all());
        if($validator->fails()) {
            return redirect()->back()
                            ->withInput($reg->all())
                            ->withErrors($validator->errors());
        }
        if(!empty($reg->footer_id)){
            $footer = Footer::find($reg->footer_id);
            $footer->about_us = $reg->about_us;
            $footer->save();
        }
        return redirect('/admin/footer');
    }

    public function newletterDelete(Request $reg){
        $id = $reg->id;
        $item = NewLetter::where('id','=',$id)->first();
        if(!empty($item)) {
            $item->delete();
        }
        return redirect('/admin/footer');
    }
    //End footer
}
