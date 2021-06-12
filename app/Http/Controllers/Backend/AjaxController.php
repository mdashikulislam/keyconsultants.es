<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Additionally;
use App\Models\PropertyStatus;
use App\Models\ReferenceNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function addPropertyStatus(Request $request)
    {
        $this->validate($request,[
           'name'=>['required','max:255','unique:property_statuses,name']
        ]);
        $status = new PropertyStatus();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Property Status Added Successfully',
            'data'=>$status
        ]);
    }

    public function additionally(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:additionallies,name']
        ]);
        $status = new Additionally();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Additionally Added Successfully',
            'data'=>$status
        ]);
    }

    public function referenceNumber(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:255','unique:reference_numbers,name']
        ]);
        $status = new ReferenceNumber();
        $status->name = $request->name;
        $status->save();
        return response()->json([
            'status'=>true,
            'msg'=>'Reference Number Added Successfully',
            'data'=>$status
        ]);
    }
}
