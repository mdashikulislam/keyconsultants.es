<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\MoreMedia;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::orderBy('id','DESC')->paginate(5);
        return view('backend.property.index')
            ->with([
                'properties'=>$properties
            ]);
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
        if ($request->has('more_media')){
            foreach ($request->more_media as $media){
                $newMedia = new MoreMedia();
                $newMedia->property_id = $property->id;
                $mediaName = Helper::uploadSingleImage($media,'more_media','MM');
                $newMedia->path = $mediaName;
                $newMedia->save();
            }
        }
        \Alert::success('Property Added Successfully');
        return redirect()->route('admin.property.index');
    }

    public function delete(Request $request)
    {
        $property = Property::where('id',$request->id)->first();
        if (empty($property)){
            \Alert::error('Property Not found');
        }
        $property->delete();
        \Alert::success('Property Delete Successfully');
        return redirect()->back();

    }
}
