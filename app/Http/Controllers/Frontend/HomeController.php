<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Property;
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

    public function powerOfAttorney()
    {
        return view('frontend.power-of-attorney');
    }

    public function energyPerformanceCertificate()
    {
        return view('frontend.energy-performance-certificate');
    }

    public function cedularDeHabitabilidad()
    {
        return view('frontend.cedular-de-habitabilidad');
    }

    public function insuranceServices()
    {
        return view('frontend.insurance-services');
    }

    public function greenEnergy()
    {
        return view('frontend.green-energy');
    }

    public function administracionDeFincas()
    {
        return view('frontend.administracion-de-fincas');
    }

    public function ourFees()
    {
        return view('frontend.our-fees');
    }

    public function accountsBookkeeping()
    {
        return view('frontend.accounts-bookkeeping');
    }

    public function taxationMatters()
    {
        return view('frontend.taxation-matters');
    }

    public function meetOurTeam()
    {
        return view('frontend.meet-our-team');
    }

    public function careerWithKeyConsultants()
    {
        return view('frontend.career-with-key-consultants');
    }

    public function privacyCookiePolicy()
    {
        return view('frontend.privacy-cookie-policy');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function properties(Request $request)
    {

        $property = Property::where('post_status','Active');
        if ($request->reference_number){
            $property = $property->where('reference_number',$request->reference_number);
        }
        if ($request->city){
            $property = $property->where('city',$request->city);
        }
        if ($request->region){
            $property = $property->whereRaw("FIND_IN_SET('$request->region',region)");
        }
        if ($request->property_type){
            $property = $property->whereRaw("FIND_IN_SET('$request->property_type',property_type)");
        }
        if ($request->max_price){
            $property = $property->whereBetween('price',[$request->min_price,$request->max_price]);
        }
        if ($request->max_bed){
            $property = $property->whereBetween('room',[$request->min_bed,$request->max_bed]);
        }
        if ($request->additionally){
            $property = $property->whereRaw("FIND_IN_SET('$request->additionally',additionally)");
        }
        $property= $property->with('propertyStatus')->orderBy('created_at','DESC')->get();
        return view('frontend.properties')
            ->with([
                'properties'=>$property
            ]);
    }

    public function sale(Request $request)
    {

        $property = Property::where('post_status','Active')->with('propertyStatus');
        if ($request->reference_number){
            $property = $property->where('reference_number',$request->reference_number);
        }
        if ($request->city){
            $property = $property->where('city',$request->city);
        }
        if ($request->region){
            $property = $property->whereRaw("FIND_IN_SET('$request->region',region)");
        }
        if ($request->property_type){
            $property = $property->whereRaw("FIND_IN_SET('$request->property_type',property_type)");
        }
        if ($request->max_price){
            $property = $property->whereBetween('price',[$request->min_price,$request->max_price]);
        }
        if ($request->max_bed){
            $property = $property->whereBetween('room',[$request->min_bed,$request->max_bed]);
        }
        if ($request->additionally){
            $property = $property->whereRaw("FIND_IN_SET('$request->additionally',additionally)");
        }

        $property= $property->whereIn('property_status',[7,13]);
        if ($request->price_filter){
            $property=$property->orderBy('price',$request->price_filter);
        }else{
            $property=$property->orderBy('created_at','DESC');
        }
        $property = $property->get();
//        return $property;
        return view('frontend.properties-sale')
            ->with([
                'properties'=>$property
            ]);
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function termsAndConditionsOfBusiness()
    {
        return view('frontend.terms-and-conditions-of-business');
    }

    public function contactForm(Request $request)
    {
        $this->validate($request,[
            'name'=>['required'],
            'email'=>['email','email'],
            'phone'=>['required'],
            'subject'=>['required'],
            'message'=>['required'],
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        \Alert::success('Message Send successfully...');
        return redirect()->back();
    }

    public function propertiesDetails($id,$slug)
    {
        $property = Property::where('id',$id)
            ->where('slug',$slug)
            ->with('more_medias')
            ->first();
        if (empty($property)){
            return  redirect()->back();
        }
        return view('frontend.property_details')
            ->with([
                'property'=>$property
            ]);
    }

    public function propertyEnquiry(Request $request)
    {
        $this->validate($request,[
            'name'=>['required'],
            'email'=>['required','email'],
            'question'=>['required'],
            'phone'=>['required'],
        ]);
        $quiry = new Enquiry();
        $quiry->post_id = $request->post_id;
        $quiry->name = $request->name;
        $quiry->email = $request->email;
        $quiry->phone = $request->phone;
        $quiry->question = $request->question;

        if ($request->querys){
            $quiry->query = implode(',',$request->querys);
        }
        $quiry->save();
        \Alert::success('Question submit Successfully');
        return redirect()->back();
    }
}
