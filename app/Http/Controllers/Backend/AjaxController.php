<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Additionally;
use App\Models\City;
use App\Models\Distict;
use App\Models\Feature;
use App\Models\MoreMedia;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\ReferenceNumber;
use App\Models\Seo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function addPropertyStatus(Request $request)
    {
        $this->validate($request,[
           'name'=>['required','max:255','unique:property_statuses,name']
        ]);
        $status = new PropertyStatus();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Property Status Added Successfully',
            'data'=>$status
        ]);
    }

    public function additionally(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:additionallies,name']
        ]);
        $status = new Additionally();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Additionally Added Successfully',
            'data'=>$status
        ]);
    }

    public function referenceNumber(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:reference_numbers,name']
        ]);
        $status = new ReferenceNumber();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Reference Number Added Successfully',
            'data'=>$status
        ]);
    }

    public function propertyType(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:reference_numbers,name']
        ]);
        $status = new PropertyType();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Property Added Successfully',
            'data'=>$status
        ]);
    }

    public function propertyFeature(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:reference_numbers,name']
        ]);
        $status = new Feature();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Property Feature added Successfully',
            'data'=>$status
        ]);
    }

    public function moreMediaUpload(Request $request)
    {
        if ($request->file('file')){
            $newMedia = new MoreMedia();
            $mediaName = Helper::uploadSingleImage($request->file,'more_media','MM');
            $newMedia->path = $mediaName;
            $newMedia->save();
        }
        return response()->json($newMedia->id);
    }

    public function getMoreMedia(Request $request)
    {
        $imageId = \DB::table('property_more_images')->where('property_id',$request->property_id)->pluck('more_media_id');
        if (empty($imageId)){
            return ;
        }
        $sort =json_decode($imageId,true);
        $sort = implode(',',$sort);

        $image = MoreMedia::whereIn('id',$imageId)->orderByRaw(\DB::raw("FIELD(id,$sort)"))->get();
        $image->each(function ($item){
            $item->name = substr($item->path,11);
            $item->size = filesize('storage/'.$item->path);
            $item->path_val = asset('storage/'.$item->path);
        });
        return $image;
    }
    public function deleteMoreMedia(Request $request)
    {
        $media = MoreMedia::where('id',$request->id)->first();
        $media->delete();
        return true;
    }

    public function seoData($id)
    {
        $data = Seo::where('id',$id)->first();
        if ($data){
            if ($data->keyword){
                $data->keyword = explode(',',$data->keyword);
            }
            return response()->json([
                'status'=>true,
                'data'=>$data
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'data'=>'Not Found'
            ]);
        }
    }
    public function changeFeature($id)
    {
        $feature = Feature::where('id',$id)->first();
        if ($feature){
            $feature->visible = 0;
            $feature->save();
            return response()->json([
                'status'=>true,
                'data'=>$feature
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'data'=>'Not Found'
            ]);
        }
    }

    public function getDistrict($name)
    {
        $districts = Distict::where('province_name',$name)->get();
        $html = '<option value="" selected disabled>Select District</option>';
        if (count($districts) > 0){
            foreach ($districts as $district){
                $html .= '<option value="'.$district->name.'">'.$district->name.'</option>';
            }
        }else{
            $html = '<option value="">Select District</option>';
        }
        return $html;
    }

    public function getCity($name)
    {
        $districts = City::where('district_name',$name)->get();
        $html = '<option value="" selected disabled>Select City</option>';
        if (count($districts) > 0){
            foreach ($districts as $district){
                $html .= '<option value="'.$district->name.'">'.$district->name.'</option>';
            }
        }else{
            $html = '<option value="">Select City</option>';
        }
        return $html;
    }

    public function getAll(Request $request)
    {

        $province = $request->province;
        $districtRequest = $request->district;
        $cityRequest = $request->city;
        $district = \App\Models\Property::whereNotNull('district')->groupBy('district')->pluck('district');
        $cities = \App\Models\Property::whereNotNull('city')->groupBy('city')->pluck('city');
        $distHtml = '';
        $cityHtml = '';
        if (!empty($province)){
            $currentDistrict = Property::whereIn('province',$province)->groupBy('district')->pluck('district');
            foreach ($currentDistrict as $dt){
                $distHtml .= '<option ';
                if ($districtRequest){
                    foreach ($districtRequest as $dts){
                        if ($dts == $dt){
                            $distHtml .=' selected ';
                        }
                    }
                }
                $distHtml .= ' value="'.$dt;
                $distHtml .=' "> '.$dt.'</option> ';
            }
        }else{
            foreach ($district as $dt){
                $distHtml .= '<option ';
                if ($districtRequest){
                    foreach ($districtRequest as $dts){
                        if ($dts == $dt){
                            $distHtml .=' selected ';
                        }
                    }
                }
                $distHtml .= ' value="'.$dt;
                $distHtml .='">'.$dt.'</option>';
            }
        }
        if (!empty($districtRequest)){
            $currentCity = Property::whereIn('district',$districtRequest)->groupBy('city')->pluck('city');
            foreach ($currentCity as $dt){
                $cityHtml .= '<option ';
                if ($cityRequest){
                    foreach ($cityRequest as $dts){
                        if ($dts == $dt){
                            $cityHtml .=' selected ';
                        }
                    }
                }
                $cityHtml .=' value="'.$dt;
                $cityHtml .='">'.$dt.'</option>';
            }
        }else{
            foreach ($cities as $ct){
                $cityHtml .= '<option ';
                if ($cityRequest){
                    foreach ($cityRequest as $cts){
                        if ($cts == $ct){
                            $cityHtml .=' selected ';
                        }
                    }
                }
                $cityHtml .='value="'.$ct;
                $cityHtml .='">'.$ct.'</option>';
            }
        }
        $data = [
            'district'=>$distHtml,
            'city'=>$cityHtml
        ];
        return $data;
    }
}
