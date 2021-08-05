<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Favorite;
use App\Models\Property;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'Mallorca'=>[
                'Alaró'=>["Alaro"],
                'Alcúdia'=>["Port d' Alcudia","Platja d'Alcudia","Ciutat d' Alcudia"],
                'Algaida'=>["Algaida","Pina","Randa"],
                'Andratx'=>["Andratx Town","Camp de Mar","Port d'Andratx","Sant Elm","S'Arraco"],
                'Ariany'=>["Ariany"],
                'Artà'=>["Artà","Colònia de Sant Pere","Betlem","Montferrutx","Sant Pere","s’Estanyo"],
                'Badia Grande'=>["Badia Gran","Badia Blava","Tolleric"],
                'Banyalbufar'=>["Banyalbufar"],
                'Binissalem'=>["Binissalem"],
                'Búger'=>["Buger"],
                'Bunyola'=>["Bunyola","Deya","Palmanyola"],
                'Calvià'=>[""],
                'Campanet'=>["Campanet"],
                'Campos'=>["Campos","Sa Rapita","Ses Covetes"],
                'Capdepera'=>["Capdepera"],
                'Consell'=>["Consell"],
                'Costitx'=>["Costitx"],
                'Deià'=>["Deià"],
                'Escorca'=>["Escorca"],
                'Esporles'=>["Esporles","Es Verger","Ses Rotgetes"],
                'Estellencs'=>["Estellencs"],
                'Felanitx'=>["Felanitx Centro", "Portocolom", "S'Horta ", "Cas Concos Des Cavaller", "Cala Ferrera ", "Cala Serena"],
                'Inca'=>["Inca Centro", "Son Amonda", "Reis Catòlics", "Gran Via de Colom", "Cristo Rey", "Park Europa", "Zona Periurbana", "Blanquer"],
                'Lloret de Vistalegre'=>["Lloret de Vistalegre"],
                'Lloseta'=>["Lloseta"],
                'Llubí'=>["Llubí"],
                'Llucmajor'=>["Llucmajor Centro", "s'Arenal", "Badia Gran", "Badia Blava", "les Palmeres", "sa Torre", "Son Verí Nou", "Maioris Décima", "Tolleric", "Cala Blava", "Bellavista", "s'Estanyol de Migjorn", "Cala Pi", "Puigderrós", "es Pas de Vallgornera", "Vallgornera Nou "],
                'Manacor'=>["Manacor Centro", "Porto Cristo", "Cala Magrana", "Cala Aguila - Cala Mendia", "Cales de Mallorca", "S'Illot - Cala Morlanda", "Cala Murada", "S'Estany den Mas"],
                'Manacor de la Vall'=>["Manacor de la Vall"],
                'Maria de la Salut'=>["Maria de la Salut"],
                'Marratxi'=>["Sa Cabaneta", "Es Garrovers", "Pòrtal", "Sa Cabana - Can Carbonell", "Ses Cases Noves", "Pont d'Inca", "Son Ramonell - Es Figueral", "Pla de na Tesa", "Marratxinet", "Son Ametller"],
                'Montuïri'=>["Montuïri"],
                'Muro'=>["Muro"],
                'Palma De Mallorca'=>["Amanecer", "Arenal", "Bonanova", "Bons Aire", "Cala Major", "Camp Redó", "Can Capes", "Can Pastilla", "Casco Antiguo (Palma Old Town)", "Cas Capiscol", "Coll d'EN Rabassa", "El Jonquet", "El Torreno", "Es Forti", "Es Pil.lari", "Establiments", "Estadi Balear", "Genova", "La Llonja", "La Seu - Cort", "La Vileta", "Las Avenidas", "Les Maravelles", "Llevant", "L'Olivera", "Nou Llevant", "Paseo Maritimo", "Pere Garau", "Playa de Palma", "Plaza  deToros", "Portixol - Molinar", "Rafal", "Sa Casa Blanca", "Sa Indiotería", "Sant Agustï (San Agustin)", "Sant Jordi", "Santa Catalina", "S'Aranjassa", "Secar de la Real", "Ses Cadenes", "Sindicat", "Son Armadans", "Son Canals", "Son Castello", "Son Cotoner", "Son Dameto", "Son Espanyollet", "Son Ferriol", "Son Fortesa", "Son Gotleu", "Son Indioteria", "Son Malferit", "Son Moix", "Son Oliva", "Son Pereto", "Son Rapinya", "Son Roca", "Son Sardinia", "Son Serra","Son Serra","Son Vida","Son Xigala","Son Ximelis","Zona Colegios"],
                'Petra'=>["Petra"],
                'Pollença'=>["Pollença","Puerto Pollenca"],
                'Porreres'=>["Porreres"],
                'Puigpunyent'=>["Puigpunyent","Galilea"],
                'Sa Pobla'=>["Sa Pobla"],
                'Sant Llorenç'=>["Sant Llorenç Des Cardassar","Sa Coma","Son Carrio"],
                'Sant Juan'=>["Sant Joan"],
                'Santa Eugènia'=>["Santa Eugènia"],
                'Santa Magalida'=>["Santa Margalida","Can Picafort","Son Serra de Marina"],
                'Santa Maria del Camí'=>["Santa Maria del Camí"],
                'Santanyi'=>["Santanyi","Cala d'Or","s'Alqueria Blanca","es Llombards","Cala Figuera","Portopetro","Calonge","Cala Llombards"],
                'Selva'=>["Selva"],
                'Sencelles'=>["Sencelles"],
                'Ses Salines'=>["Ses Salines","Colònia de Sant Jordi"],
                'Sineu'=>["Sineu"],
                'Soller'=>["Sóller","Port  de Sóller"],
                'Son Servera'=>["Son Servera","Cala Bona","Cala Millor","Costa de los Pinos"],
                'Valledemossa'=>["Valldemossa"],
                'Vilafranca de Bonany'=>["vilafranca de Bonany"],
            ],
            'Ibiza '=>[],
            'Menorca'=>[]
        ];

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
        if ($request->reference_number){
            $property = $property->whereIn('reference_number',$request->reference_number);
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
        if ($request->price_filter){
            $property=$property->orderBy('price',$request->price_filter);
        }else{
            $property=$property->orderBy('created_at','DESC');
        }
        $property= $property->paginate(9);
        return view('frontend.properties')
            ->with([
                'properties'=>$property
            ]);
    }

    public function sale(Request $request)
    {
        Helper::getSeoDataByUrl(\Illuminate\Support\Facades\Request::segment(1).'/'.\Illuminate\Support\Facades\Request::segment(2));
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
}
