<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\OnlineTax;
use App\Models\Property;
use App\Models\SeekerInfo;
use App\Models\SeekerNote;
use App\Models\Seo;
use App\Models\SpanishWill;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['property'] = Property::count();
        $data['activeProperty'] = Property::where('post_status','Active')->count();
        $data['contact'] = Contact::count();
        $data['enquiry'] = Enquiry::count();
        return view('backend.dashboard',$data);
    }

    public function contactMessage()
    {
        $contacts = Contact::orderBy('created_at','DESC')->paginate(10);
        return view('backend.contact')->with([
            'contacts'=>$contacts
        ]);
    }

    public function contactDelete($id)
    {
        $contact = Contact::where('id',$id)->first();
        if (empty($contact)){
            \Alert::error('Contact Not found');
            return redirect()->back();
        }
        $contact->delete();
        \Alert::success('Contact Delete Successful.');
        return redirect()->back();
    }
    public function enquiry()
    {
        $enquiry = Enquiry::orderBy('created_at','DESC')->paginate(10);
        return view('backend.enquiry')->with([
            'enquiry'=>$enquiry
        ]);
    }
    public function enquiryDelete($id)
    {
        $enquiry = Enquiry::where('id',$id)->first();
        if (empty($enquiry)){
            \Alert::error('Enquiry Not found');
            return redirect()->back();
        }
        $enquiry->delete();
        \Alert::success('Enquiry Delete Successful.');
        return redirect()->back();
    }

    public function seo()
    {
        return view('backend.seo');
    }

    public function seoStore(Request $request)
    {
        $data = Seo::where('id',$request->id)->first();
        if ($request->title){
            $data->title = $request->title;
        }
        if ($request->description){
            $data->description = $request->description;
        }
        if ($request->keyword){
            $data->keyword = implode(',',$request->keyword);
        }
        $data->save();
        \Alert::success('Seo Added Successfully');
        return redirect()->back();
    }

    public function propertySeeker()
    {
        $seekers = SeekerInfo::with(['seeker_datas'=>function($item){
            $item->orderBy('created_at','DESC');
            $item->with(['propertyStatus']);
        }])->whereHas('seeker_datas')->orderByDesc('created_at')->paginate(10);
        return view('backend.property-seeker')
            ->with([
                'seekers'=>$seekers
            ]);
    }

    public function seekerNote($id)
    {
        $seekerNotes = SeekerNote::where('seeker_id',$id)->orderByDesc('created_at')->get();
        return view('backend.property.seeker-note')
            ->with([
                'id'=>$id,
                'seekerNotes'=>$seekerNotes
            ]);
    }

    public function seekerNoteAdd(Request $request)
    {
        $seekerNote = new SeekerNote();
        $seekerNote->seeker_id = $request->id;
        $seekerNote->title = $request->title;
        $seekerNote->content = $request->note;
        $seekerNote->save();
        toast('Note added successfully','success');
        return redirect()->back();
    }

    public function seekerNoteDelete($id)
    {
        $seekerData = SeekerNote::where('id',$id)->first();
        if ($seekerData){
            $seekerData->delete();
            toast('Note delete successfully','success');
            return redirect()->back();
        }else{
            toast('not found','error');
            return redirect()->back();
        }
    }

    public function transaction()
    {
        $trxs = Transaction::orderByDesc('created_at')->get();
        return view('backend.transaction')
            ->with([
                'trxs'=>$trxs
            ]);
    }

    public function onlineTaxForm()
    {
        $taxReturns = OnlineTax::where('status','Accept')->orderByDesc('created_at')->get();
        return view('backend.tax-return')
            ->with([
                'taxReturns'=>$taxReturns
            ]);
    }

    public function onlineTaxFormSingle($id)
    {
        $data = OnlineTax::findOrFail($id);
        if (empty($data)){
            toast('Data not found');
            return redirect()->back();
        }
        return view('backend.tax-return-single')
            ->with([
                'data'=>$data
            ]);
    }

    public function spanishWill()
    {
        $spanishWills = SpanishWill::where('payment_status','Accept')->orderByDesc('created_at')->get();
        return view('backend.spanish-will')
            ->with([
                'spanishWills'=>$spanishWills
            ]);
    }

    public function spanishWillSingle($id)
    {
        $data = SpanishWill::findOrFail($id);
        if (empty($data)){
            toast('Data not found','error');
            return  redirect()->back();
        }
        if ($data->current_child_first_name){
            $data->current_child_first_name = explode(',',$data->current_child_first_name);
        }
        if ($data->current_child_surname){
            $data->current_child_surname = explode(',',$data->current_child_surname);
        }
        if ($data->current_child_type){
            $data->current_child_type = explode(',',$data->current_child_type);
        }
        if ($data->other_child_first_name){
            $data->other_child_first_name = explode(',',$data->other_child_first_name);
        }
        if ($data->other_child_surname){
            $data->other_child_surname = explode(',',$data->other_child_surname);
        }
        if ($data->other_child_type){
            $data->other_child_type = explode(',',$data->other_child_type);
        }
        $data->beneficiary_first_name = explode(',',$data->beneficiary_first_name);
        $data->beneficiary_last_name = explode(',',$data->beneficiary_last_name);
        $data->beneficiary_relationship = explode(',',$data->beneficiary_relationship);
        $data->beneficiary_description = explode(',',$data->beneficiary_description);
        $data->previous_info = json_decode($data->previous_info,true);
        //return $data;
        return view('backend.will-single')
            ->with([
                'data'=>$data
            ]);
    }
}
