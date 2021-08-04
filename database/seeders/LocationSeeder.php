<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Distict;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
                'Calvià'=>["Calvià"],
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

        foreach ($data['Mallorca'] as $j => $jsm){
            $dst = ['name'=>$j,'province_name'=>'Mallorca'];
            Distict::firstOrCreate($dst);
            foreach ($jsm as $k => $p){
                $datas = ['name'=>$p,'district_name'=>$j];
                City::firstOrCreate($datas);
            }
        }
    }

}
