<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class ServicesController extends Controller
{
    //
    public function services(){
    $title="Services";
    $des="Sinotrans Logistics Pakistan is a holistic logistic solutions provider, aiming to provide door to-door services to meet every one of our customers’ logistical needs; All as part of the group recognized worldwide for its portfolio of high-profile clients, projects and offering 360-degree services. Our extensive network of cargo agents expertly handles air and ocean cargo in one seamless transaction. Our range of services includes";
    $this->setSeo($title,$des);
    return view('frontend.pages.services.index');
    }

    public function setSeo($title,$description){
        SEOTools::setTitle($title." ".config('app.name'));
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }

    function bindServices($title,$description,$icon,$sub_item){
        return[
            'title'=>$title,
            'description'=>$description,
            'icon'=>$icon,
            'sub_item'=>$sub_item,
        ];
    }

    public function ServicesList(){
        return [
            $this->bindServices(
                'Ocean Freigh',
                'We work with leading carriers and use an expanding network of agents, partners, as well as our own offices around the world.  This enables us to give you global service backed by the extensive expertise of our local teams.
                 Working with us means benefitting from our flexible, fully integrated multi-model logistic solutions, competitive rates and quick transit times. Our all-inclusive ocean freight service utilizes the most efficient routes to ensure your cargo reaches its destination safely and on time.
                 We also provide full cargo routing proposals, including advice on cargo stowage, and securing for out of gauge, heavy and otherwise ‘exceptional’ cargoes. We also offer comprehensive route surveys for complex movements where necessary.',
                 'flaticon-010-cargo',
                 [
                    'Conventional shipping',
                    'Ro-Ro services worldwide',
                    'FCL/LCL Service',
                    'Heavy Lift and Oversized Cargo',
                    'Stevedoring Services',
                    'Potline Giver Service',
                 ],
            ),
            $this->bindServices(
                'SHIP AGENCY',
                'Working with us vessel principals and service providers means benefitting from our flexible, fully integrated multi-model logistic solutions and quick transit times. Our experienced and dedicated team provides outstanding handling of all types of cargos including heavy lifts and oversized project cargos, as well as communication and knowledge of ports and compliance requirements at all Pakistani ports. Our success has always been our ability to anticipate and adapt and therefore keep our pace with our customers’ needs and demands.',
                'flaticon-010-cargo',
                 [
                    'Inward Outward',
                    '
'
                 ],
            ),

        ];
    }
}
