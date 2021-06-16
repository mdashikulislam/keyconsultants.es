<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function contactMessage()
    {
        $contacts = Contact::orderBy('created_at')->paginate(10);
        return view('backend.contact')->with([
            'contacts'=>$contacts
        ]);
    }

    public function enquiry()
    {
        $enquiry = Enquiry::orderBy('created_at')->paginate(10);
        return view('backend.enquiry')->with([
            'enquiry'=>$enquiry
        ]);
    }
}
