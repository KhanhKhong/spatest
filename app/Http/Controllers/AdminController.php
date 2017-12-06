<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
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



}
