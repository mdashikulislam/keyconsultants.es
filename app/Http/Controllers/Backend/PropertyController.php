<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('backend.property.index');
    }

    public function create()
    {
        return view('backend.property.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>['required','max:255'],
            'description'=>['required'],
            'reference_number'=>['required'],
            'price'=>['required'],
            'city'=>['required'],
            'region'=>['required'],
            'room'=>['required'],
            'bathroom'=>['required'],
            'land_area'=>['required'],
            'living_space'=>['required'],
            'balcony_terrace_area'=>['required'],
            'property_status'=>['required'],
            'property_type'=>['required'],
            'feature_image'=>['required'],
        ]);
        $property = new Property();
        $property->title = $request->title;
        $property->slug = \Str::slug($request->title);
        $property->description = $request->description;
        $property->reference_number = implode(',',$request->reference_number);
        $property->price = $request->price;
        $property->city = $request->city;
        $property->region = implode(',',$request->region);
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->land_area = $request->land_area;
        $property->living_space = $request->living_space;
        $property->balcony_terrace_area = $request->balcony_terrace_area;
        $property->property_status = implode(',',$request->property_status);
        $property->property_type = implode(',',$request->property_type);
        if ($request->additionally){
            $property->additionally = implode(',',$request->additionally);
        }
        if ($request->file('feature_image')){
            $imageName = Helper::uploadSingleImage($request->feature_image,'feature_image','FI');
            $property->feature_image = $imageName;
        }
        $property->save();
        \Alert::success('Property Added Successfully');
        return redirect()->back();
    }
}
