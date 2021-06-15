<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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
}
