<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('backend.property.index');
    }

    public function create()
    {
        return view('backend.property.create');
    }
}
