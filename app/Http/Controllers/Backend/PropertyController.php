<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\MoreMedia;
use App\Models\Note;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = new Property();
        if ($request->keyword){
            $keyword = $request->keyword;
            $properties  = $properties->where('title','LIKE',"%$keyword%");
            $properties  = $properties->orWhere('owner_name','LIKE',"%$keyword%");
            $properties  = $properties->orWhere('reference_number','LIKE',"%$keyword%");
            $properties  = $properties->orWhere('room',$keyword);
            $properties  = $properties->orWhere('bathroom',$keyword);
            $properties  = $properties->orWhere('price',$keyword);
            $properties  = $properties->orWhere('city',$keyword);
            $properties  = $properties->orWhere('region',$keyword);
            $properties  = $properties->orWhere('land_area',$keyword);
            $properties  = $properties->orWhere('living_space',$keyword);
            $properties = $properties->groupBy('id');
        }
        $properties = $properties->orderBy('id','DESC')->paginate(20);
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
            'owner_name'=>['required','max:255'],
            'description'=>['required'],
            'price'=>['required'],
            'city'=>['required'],
            'region'=>['required'],
            'room'=>['required'],
            'bathroom'=>['required'],
            'property_status'=>['required'],
            'property_type'=>['required'],
            'feature_image'=>['required'],
        ]);
        $referenceNumber = Property::orderBy('id','DESC')->limit(1)->pluck('id');
        $refNumber = @$referenceNumber[0] ? : 0;
        $property = new Property();
        $property->title = $request->title;
        $property->owner_name = $request->owner_name;
        $property->slug = \Str::slug($request->title);
        $property->reference_number = 'SP-'.sprintf('%05u', $refNumber+1);
        $property->description = $request->description;
        $property->price = $request->price;
        $property->city = $request->city;
        $property->region = implode(',',$request->region);
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->land_area = $request->land_area;
        $property->living_space = $request->living_space;
        $property->balcony_terrace_area = $request->balcony_terrace_area;
        $property->property_status = $request->property_status;
        $property->property_type = implode(',',$request->property_type);
        if ($request->feature){
            $property->feature = implode(',',$request->feature);
        }
        if ($request->symbol){
            $property->symbol = $request->symbol;
        }
//        if ($request->additionally){
//            $property->additionally = implode(',',$request->additionally);
//        }
        if ($request->file('feature_image')){
            $imageName = Helper::uploadSingleImage($request->feature_image,'feature_image','FI');
            $property->feature_image = $imageName;
        }
        $property->post_status = 'Active';
        $property->save();
        if ($request->more_media){
            $moreMedia = explode(',',$request->more_media);
            $property->more_medias()->sync($moreMedia);
        }
        \Alert::success('Property Added Successfully');
        return redirect()->route('admin.property.index');
    }

    public function edit($id,$slug)
    {
        $property = Property::where(['id'=>$id,'slug'=>$slug])->first();
        if (empty($property)){
            return redirect()->back();
        }
        return view('backend.property.edit')
            ->with([
                'property'=>$property
            ]);
    }

    public function update($id,$slug,Request $request)
    {
        $this->validate($request,[
            'title'=>['required','max:255'],
            'owner_name'=>['required','max:255'],
            'description'=>['required'],
            'price'=>['required'],
            'city'=>['required'],
            'region'=>['required'],
            'room'=>['required'],
            'bathroom'=>['required'],
            'property_status'=>['required'],
            'property_type'=>['required'],
        ]);
        $property = Property::where(['id'=>$id,'slug'=>$slug])->first();

        $property->title = $request->title;
        $property->owner_name = $request->owner_name;
        $property->slug = \Str::slug($request->title);

        $property->description = $request->description;
        $property->price = $request->price;
        $property->city = $request->city;
        $property->region = implode(',',$request->region);
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->land_area = $request->land_area;
        $property->living_space = $request->living_space;
        $property->balcony_terrace_area = $request->balcony_terrace_area;
        $property->property_status = $request->property_status;
        $property->property_type = implode(',',$request->property_type);
        $property->feature = implode(',',$request->feature);
        if ($request->symbol){
            $property->symbol = $request->symbol;
        }
//        if ($request->additionally){
//            $property->additionally = implode(',',$request->additionally);
//        }
        if ($request->file('feature_image')){
            $imageName = Helper::uploadSingleImage($request->feature_image,'feature_image','FI');
            $property->feature_image = $imageName;
        }
        if ($request->file('feature_image')){
            $imageName = Helper::uploadSingleImage($request->feature_image,'feature_image','FI');
            $property->feature_image = $imageName;
        }
        $property->save();
        if ($request->more_media){
            $moreMedia = explode(',',$request->more_media);
            $property->more_medias()->detach($moreMedia);
            foreach ($moreMedia as $m){
                $property->more_medias()->attach($m);
            }
        }
        \Alert::success('Property Update Successfully');
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

    public function note($id)
    {
        $notes = Note::where('post_id',$id)->orderBy('created_at','DESC')->get();
        return view('backend.property.note')
            ->with([
                'id'=>$id,
                'notes'=>$notes
            ]);
    }

    public function addNote(Request $request)
    {
        $note = new Note();
        $note->post_id = $request->post_id;
        $note->name = $request->name;
        $note->email = $request->email;
        $note->note = $request->note;
        $note->save();
        \Alert::success('Private Note added successfully');
        return redirect()->back();
    }

    public function deleteNote($id)
    {
        $note = Note::where('id',$id)->first();
        $note->delete();
        \Alert::success('Private Note delete Successful');
        return redirect()->back();
    }

    public function statusChange(Request $request)
    {
        $property = Property::where('id',$request->post_id)->first();
        $property->post_status = $request->status;
        $property->save();
        \Alert::success('Status Change Successfully');
        return redirect()->back();
    }
}
