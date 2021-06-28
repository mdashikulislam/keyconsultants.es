<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Additionally;
use App\Models\Feature;
use App\Models\MoreMedia;
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
        $image = MoreMedia::whereIn('id',$imageId)->get();
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
}
