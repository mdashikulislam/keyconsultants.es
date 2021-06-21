<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seoList = [
            [
                'name'=>'homepage',
                'url'=>'homepage'
            ],
            [
                'name'=>'Property Sales',
                'url'=>'property-sales'
            ],
            [
                'name'=>'Conveyancing Assistance',
                'url'=>'conveyancing-assistance'
            ],
            [
                'name'=>'Non Resident Services',
                'url'=>'non-resident-services'
            ],
            [
                'name'=>'Wills probate',
                'url'=>'wills-probate'
            ],
            [
                'name'=>'Power of attorney',
                'url'=>'power-of-attorney'
            ],
            [
                'name'=>'Energy performance certificate',
                'url'=>'energy-performance-certificate'
            ],[
                'name'=>'Cedular de habitabilidad',
                'url'=>'cedular-de-habitabilidad'
            ],[
                'name'=>'Insurance services',
                'url'=>'insurance-services'
            ],[
                'name'=>'Green energy',
                'url'=>'green-energy'
            ],[
                'name'=>'Administracion de fincas',
                'url'=>'administracion-de-fincas'
            ],[
                'name'=>'Our fees',
                'url'=>'our-fees'
            ],[
                'name'=>'Accounts bookkeeping',
                'url'=>'accounts-bookkeeping'
            ],[
                'name'=>'Taxation matters',
                'url'=>'taxation-matters'
            ],[
                'name'=>'Meet our team',
                'url'=>'meet-our-team'
            ],[
                'name'=>'Career With Key Consultants',
                'url'=>'career-with-key-consultants'
            ],[
                'name'=>'Privacy Cookie Policy',
                'url'=>'privacy-cookie-policy'
            ],[
                'name'=>'About Us',
                'url'=>'about-us'
            ],[
                'name'=>'Properties',
                'url'=>'properties'
            ],[
                'name'=>'Properties Sale',
                'url'=>'properties/sale'
            ],[
                'name'=>'Properties Rent',
                'url'=>'properties/rent'
            ],[
                'name'=>'Contact',
                'url'=>'contact'
            ],[
                'name'=>'Terms And Conditions Of Business',
                'url'=>'terms-and-conditions-of-business'
            ],
        ];
        foreach ($seoList as $list){
            Seo::create($list);
        }
    }
}
