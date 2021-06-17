<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Property;
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

    public function enquiry()
    {
        $enquiry = Enquiry::orderBy('created_at','DESC')->paginate(10);
        return view('backend.enquiry')->with([
            'enquiry'=>$enquiry
        ]);
    }
}
