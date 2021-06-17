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
        $property->property_status = implode(',',$request->property_status);
        $property->property_type = implode(',',$request->property_type);
        if ($request->additionally){
            $property->additionally = implode(',',$request->additionally);
        }
        if ($request->file('feature_image')){
            $imageName = Helper::uploadSingleImage($request->feature_image,'feature_image','FI');
            $property->feature_image = $imageName;
        }
        $property->post_status = 'Active';
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
}
