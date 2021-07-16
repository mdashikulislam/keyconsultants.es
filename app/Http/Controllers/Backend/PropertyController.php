<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\MoreMedia;
use App\Models\Note;
use App\Models\Owner;
use App\Models\Property;
use App\Models\Region;
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
            $properties  = $properties->orWhere('room',$keyword);
            $properties  = $properties->orWhere('bathroom',$keyword);
            $properties  = $properties->orWhere('price',$keyword);
            $properties  = $properties->orWhere('land_area',$keyword);
            $properties  = $properties->orWhere('living_space',$keyword);
        }
        if ($request->reference_number){
            $properties = $properties->where('reference_number',$request->reference_number);
        }
        if ($request->city){
            $properties = $properties->where('city',$request->city);
        }
        if ($request->region){
            $properties = $properties->whereRaw('FIND_IN_SET('.$request->region.',region)');
        }
//        if ($request->keyword){
//            $keyword = $request->keyword;
//            $regions = Region::where('name','LIKE',"%$keyword%")->groupBy('id')->pluck('id');
//            $properties  = $properties->where('title','LIKE',"%$keyword%");
//            $properties  = $properties->orWhere('owner_name','LIKE',"%$keyword%");
//            $properties  = $properties->orWhere('reference_number',$keyword);
//            $properties  = $properties->orWhere('room',$keyword);
//            $properties  = $properties->orWhere('bathroom',$keyword);
//            $properties  = $properties->orWhere('price',$keyword);
//            $properties  = $properties->orWhere('city','LIKE',"%$keyword%");
//            if (!empty($regions)){
//                foreach ($regions as $region){
//                    $properties  = $properties->orWhereRaw('FIND_IN_SET('.$region.',region)');
//                }
//            }
//            $properties  = $properties->orWhere('land_area',$keyword);
//            $properties  = $properties->orWhere('living_space',$keyword);
//            $properties = $properties->groupBy('id');
//        }
        $properties = $properties->orderBy('id','DESC')->groupBy('id')->paginate(10);
        $referenceNumbers = Property::pluck('reference_number');
        $regions = Region::all();
        return view('backend.property.index')
            ->with([
                'properties'=>$properties,
                'referenceNumbers'=>$referenceNumbers,
                'regions'=>$regions
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
        $property->ibi = round($request->ibi,2);
        $property->basura = round($request->basura,2);
        $property->community = round($request->community,2);
        $property->energy_cost = $request->energy_cost;
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
        $property->ibi = round($request->ibi,2);
        $property->basura = round($request->basura,2);
        $property->community = round($request->community,2);
        $property->energy_cost = $request->energy_cost;
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
        $owners = Owner::where('user_id',$id)->orderBy('created_at','ASC')->get();
        return view('backend.property.note')
            ->with([
                'id'=>$id,
                'notes'=>$notes,
                'owners'=>$owners
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

    public function ownerStore(Request $request)
    {
        $owner = new Owner();
        $owner->user_id = $request->post_id;
        $owner->name = $request->name;
        $owner->dni_nie = $request->dni_nie;
        $owner->address1 = $request->address1;
        $owner->address2 = $request->address2;
        $owner->country = $request->country;
        $owner->post_code = $request->post_code;
        $owner->email = $request->email;
        $owner->telephone = $request->telephone;
        $owner->mobile = $request->mobile;
        $owner->nationality = $request->nationality;
        $owner->passport = $request->passport;
        $owner->save();
        toast('Owner Added Successfully','success');
        return redirect()->back();
    }

    public function ownerDelete($id)
    {
        Owner::where('id',$id)->delete();
        toast('Owner information delete successful','success');
        return redirect()->back();
    }
}
