<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Favorite;
use App\Models\Property;
use App\Models\SeekerData;
use App\Models\SeekerInfo;
use App\Models\SpanishWill;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Helper::getSeoDataByUrl();
        return view('frontend.home');
    }

    public function propertySales()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.property-sales');
    }

    public function conveyancingAssistance()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.conveyancing-assistance');
    }

    public function nonResidentServices()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.non-resident-services');
    }

    public function willsProbate()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.wills-probate');
    }

    public function powerOfAttorney()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.power-of-attorney');
    }

    public function energyPerformanceCertificate()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.energy-performance-certificate');
    }

    public function cedularDeHabitabilidad()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.cedular-de-habitabilidad');
    }

    public function insuranceServices()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.insurance-services');
    }

    public function greenEnergy()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.green-energy');
    }

    public function administracionDeFincas()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.administracion-de-fincas');
    }

    public function ourFees()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.our-fees');
    }

    public function accountsBookkeeping()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.accounts-bookkeeping');
    }

    public function taxationMatters()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.taxation-matters');
    }

    public function meetOurTeam()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.meet-our-team');
    }

    public function careerWithKeyConsultants()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.career-with-key-consultants');
    }

    public function privacyCookiePolicy()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.privacy-cookie-policy');
    }

    public function aboutUs()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.about-us');
    }

    public function properties(Request $request)
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        $property = Property::where('post_status','Active')->with('propertyStatus');
        if ($request->looking_for){
            $property = $property->where('property_status',$request->looking_for);
        }
        if ($request->reference_number){
            $property = $property->whereIn('reference_number',$request->reference_number);
        }
        if ($request->province){
            $property = $property->whereIn('province',$request->province);
        }
        if ($request->district){
            $property = $property->whereIn('district',$request->district);
        }
        if ($request->city){
            $property = $property->whereIn('city',$request->city);
        }
        if ($request->property_type){
            $property = $property->whereIn('property_type',$request->property_type);
        }
        if ($request->max_price){
            $property = $property->whereBetween('price',[$request->min_price,$request->max_price]);
        }
        if ($request->max_bed){
            $property = $property->whereBetween('room',[$request->min_bed,$request->max_bed]);
        }
        if ($request->feature){
            $fi = implode(',',$request->feature);
            $property = $property->where('feature','LIKE',"%$fi%");
        }
        if ($request->price_filter){
            $property=$property->orderBy('price',$request->price_filter);
        }else{
            $property=$property->orderBy('created_at','DESC');
        }
        $property= $property->paginate(9);
//        return $property;
        return view('frontend.properties')
            ->with([
                'properties'=>$property
            ]);
    }

    public function sale(Request $request)
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1).'/'.\Illuminate\Support\Facades\Request::segment(2));
        $property = Property::where('post_status','Active')->with('propertyStatus');
        if ($request->feature){
            $fi = implode(',',$request->feature);
            $property = $property->where('feature','LIKE',"%$fi%");
        }
        if ($request->reference_number){
            $property = $property->whereIn('reference_number',$request->reference_number);
        }
        if ($request->province){
            $property = $property->whereIn('province',$request->province);
        }
        if ($request->district){
            $property = $property->whereIn('district',$request->district);
        }
        if ($request->city){
            $property = $property->whereIn('city',$request->city);
        }

        if ($request->property_type){
            $property = $property->whereIn('property_type',$request->property_type);
        }
        if ($request->max_price){
            $property = $property->whereBetween('price',[$request->min_price,$request->max_price]);
        }
        if ($request->max_bed){
            $property = $property->whereBetween('room',[$request->min_bed,$request->max_bed]);
        }

        $property= $property->whereIn('property_status',[7,13]);
        if ($request->price_filter){
            $property=$property->orderBy('price',$request->price_filter);
        }else{
            $property=$property->orderBy('created_at','DESC');
        }
        $property= $property->paginate(9);
//        return $property;
        return view('frontend.properties-sale')
            ->with([
                'properties'=>$property
            ]);
    }

    public function rent(Request $request)
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1).'/'.\Illuminate\Support\Facades\Request::segment(2));
        $property = Property::where('post_status','Active')->with('propertyStatus');

        if ($request->feature){
            $fi = implode(',',$request->feature);
            $property = $property->where('feature','LIKE',"%$fi%");
        }
        if ($request->reference_number){
            $property = $property->whereIn('reference_number',$request->reference_number);
        }
        if ($request->province){
            $property = $property->whereIn('province',$request->province);
        }
        if ($request->district){
            $property = $property->whereIn('district',$request->district);
        }
        if ($request->city){
            $property = $property->whereIn('city',$request->city);
        }

        if ($request->property_type){
            $property = $property->whereIn('property_type',$request->property_type);
        }
        if ($request->max_price){
            $property = $property->whereBetween('price',[$request->min_price,$request->max_price]);
        }
        if ($request->max_bed){
            $property = $property->whereBetween('room',[$request->min_bed,$request->max_bed]);
        }

        $property= $property->whereIn('property_status',[6,13]);
        if ($request->price_filter){
            $property=$property->orderBy('price',$request->price_filter);
        }else{
            $property=$property->orderBy('created_at','DESC');
        }
        $property= $property->paginate(9);
//        return $property;
        return view('frontend.properties-rent')
            ->with([
                'properties'=>$property
            ]);
    }
    public function contact()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
        return view('frontend.contact');
    }

    public function termsAndConditionsOfBusiness()
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1));
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

    public function propertiesDetails($id,$slug, Request $request)
    {
//        return $request->ip();
        $property = Property::where('id',$id)
            ->where('slug',$slug)
            ->with('more_medias')
            ->with(['favorites'=>function($query) use($request){
                $query->where('ip',$request->ip());
            }])
            ->first();
//        return $property;
        if (empty($property)){
            return  redirect()->back();
        }
        \SEOMeta::setTitle(@$property->title ? :'Key Consultants Mallorca');
        \SEOMeta::setDescription(@$property->description ? strip_tags($property->description):'Real Estate Mallorca');
        \SEOMeta::setKeywords(@$property->title ?  [@$property->title] : ['Key Consultants Mallorca']);
        return view('frontend.property_details')
            ->with([
                'property'=>$property
            ]);
    }

    public function propertiesDetailsPdf($id,$slug)
    {

        $property = Property::where('id',$id)
            ->where('slug',$slug)
            ->with('more_medias')
            ->first();
//        return $property;
//        return view('frontend.pdf')->with(['data'=>$property]);
        $pdf = \PDF::loadView('frontend.pdf',['data'=>$property])->setPaper('a4','portrait');
        return $pdf->download($property->slug.'.pdf');
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

    public function spanishWill()
    {
        return view('frontend.spanish-will-form');
    }
    public function favorite(Request $request)
    {
        if ($request->mode == 0){
            $favorite = Favorite::where('post_id',$request->id)->where(['status' => 1,'ip'=>\request()->ip()])->first();
            $favorite->status = 0;
            $favorite->save();
            toast('Property remove from wishlist','success');
            return redirect()->back();
        }else{
            $favorite = Favorite::where('post_id',$request->id)->where(['status' => 0,'ip'=>\request()->ip()])->first();
            if ($favorite){
                $favorite->status = 1;
                $favorite->save();
            }else{
                $favorite = new Favorite();
                $favorite->ip = $request->ip();
                $favorite->post_id = $request->id;
                $favorite->status = 1;
                $favorite->save();
            }
            toast('Property Added into wishlist','success');
            return redirect()->back();
        }
    }

    public function propertySeeker(Request $request)
    {
        $seeker = SeekerInfo::where('email',$request->email)->first();
        if (empty($seeker)){
         $seeker = new SeekerInfo();
         $seeker->name = $request->name;
         $seeker->email = $request->email;
         $seeker->save();
        }
        $seekerData = new SeekerData();
        $seekerData->seeker_info_id = $seeker->id;
        $seekerData->reference_no = $request->mod_ref_number;
        $seekerData->province = $request->mod_province;
        $seekerData->district = $request->mod_district;
        $seekerData->city = $request->mod_city;
        $seekerData->type = $request->mod_type;
        $seekerData->min_price = $request->mod_min_price;
        $seekerData->max_price = $request->mod_max_price;
        $seekerData->min_bed = $request->mod_min_bedroom;
        $seekerData->max_bed = $request->mod_max_bedroom;
        $seekerData->for = $request->mod_for;
        $seekerData->feature = $request->mod_feature;
        $seekerData->save();
        toast('Property seeker request sent','success');
        return redirect()->back();
    }

    public function willFormSubmit(Request $request)
    {
        $will = new SpanishWill();
        $will->surname = $request->surname;
        $will->first_name = $request->first_name;
        $will->surname_at_birth = $request->surname_at_birth;
        $will->gender = $request->gender;
        $will->dob = $request->dob;
        $will->passport = $request->passport;
        $will->country_of_issue = $request->country_of_issue;
        $will->expiry_date = $request->expiry_date;
        $will->postcode = $request->postcode;
        $will->country = $request->country;
        $will->profession = $request->profession;
        $will->email = $request->email;
        $will->telephone = $request->telephone;
        $will->place_of_birth = $request->place_of_birth;
        $will->country_of_birth = $request->country_of_birth;
        $will->nationality = $request->nationality;
        $will->address = $request->address;
        $will->mother_name = $request->mother_name;
        $will->mother_living_status = $request->mother_living_status;
        $will->father_living_status = $request->father_living_status;
        $will->father_name = $request->father_name;
        $will->marital_status = $request->marital_status;
        $will->marriage_time = $request->marriage_time;
        $will->current_marriage_country = $request->current_marriage_country;
        $will->current_spouse_first_name = $request->current_spouse_first_name;
        $will->current_spouse_surname = $request->current_spouse_surname;
        $will->current_no_of_children = $request->current_no_of_children;
        $will->previous_marriage_country = $request->previous_marriage_country;
        $will->previous_spouse_first_name = $request->previous_spouse_first_name;
        $will->previous_spouse_surname = $request->previous_spouse_surname;
        $will->previous_no_of_children = $request->previous_no_of_children;
        if ($request->current_child_first_name){
            $will->current_child_first_name = implode(',',$request->current_child_first_name);
        }
        if ($request->current_child_surname){
            $will->current_child_surname = implode(',',$request->current_child_surname);
        }
        if ($request->current_child_type){
            $will->current_child_type = implode(',',$request->current_child_type);
        }


        if ($request->previous_child_first_name){
            $will->previous_child_first_name = implode(',',$request->previous_child_first_name);
        }
        if ($request->previous_child_surname){
            $will->previous_child_surname = implode(',',$request->previous_child_surname);
        }
        if ($request->previous_child_type){
            $will->previous_child_type = implode(',',$request->previous_child_type);
        }
        $will->have_other_child = $request->have_other_child;
        $will->how_other_child = $request->how_other_child;
        if ($request->other_child_first_name){
            $will->other_child_first_name = implode(',',$request->other_child_first_name);
        }
        if ($request->other_child_surname){
            $will->other_child_surname = implode(',',$request->other_child_surname);
        }
        if ($request->other_child_type){
            $will->other_child_type = implode(',',$request->other_child_type);
        }
        $will->regulated = $request->regulated;
        $will->executor_distribution = $request->executor_distribution;
        $will->executor_first_name = $request->executor_first_name;
        $will->executor_surname = $request->executor_surname;
        $will->executor_nie = $request->executor_nie;
        $will->executor_address = $request->executor_address;
        $will->made_previous = $request->made_previous;
        $will->resident_of_spain = $request->resident_of_spain;
        if ($request->beneficiary_first_name){
            $will->beneficiary_first_name = implode(',',$request->beneficiary_first_name);
        }
        if ($request->beneficiary_last_name){
            $will->beneficiary_last_name = implode(',',$request->beneficiary_last_name);
        }
        if ($request->beneficiary_relationship){
            $will->beneficiary_relationship = implode(',',$request->beneficiary_relationship);
        }
        if ($request->beneficiary_description){
            $will->beneficiary_description = implode(',',$request->beneficiary_description);
        }
        if ($will->save()){
            Session::put('will_id',$will->id);
            return redirect()->route('payment');
        }else{
            toast('Form not saved','error');
            return  redirect()->route('spanish.will');
        }

    }
    public function payment(Request $request)
    {
        $willId = Session::get('will_id');
        if (empty($willId)){
            toast('Please fill the form first','error');
            return redirect()->route('spanish.will');
        }
        $info = SpanishWill::where('id',$willId)->first();
        return view('frontend.payment')
            ->with([
                'info'=>$info
            ]);
    }

    public function onlineTaxReturn()
    {
        return view('frontend.online-tax-return');
    }

    public function onlineTaxReturnPost(Request $request)
    {
        return $request->all();
        return view('frontend.payment-success');
    }
}
