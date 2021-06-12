<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function addPropertyStatus(Request $request)
    {
        $this->validate($request,[
           'name'=>['required','max:255','unique:property_statuses,name']
        ]);
        return $request->all();
    }
}
