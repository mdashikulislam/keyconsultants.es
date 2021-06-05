<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function propertySales()
    {
        return view('frontend.property-sales');
    }

    public function conveyancingAssistance()
    {
        return view('frontend.conveyancing-assistance');
    }

    public function nonResidentServices()
    {
        return view('frontend.non-resident-services');
    }

    public function willsProbate()
    {
        return view('frontend.wills-probate');
    }
}
