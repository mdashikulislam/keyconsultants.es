<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
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

    public function properties()
    {
        return view('frontend.properties');
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
}
