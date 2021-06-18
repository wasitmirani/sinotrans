<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
class FrontEndController extends Controller
{
    //

    public function index(){

        $this->setSeo("Sinotrans is the largest integrated logistics integrator in China and has gone on to co-found, along with Transhold Ltd, Sinotrans Logistics Pakistan Pvt. Ltd., a group company of one of Pakistan's oldest & respected international freight forwarding organizations.");
        return view('frontend.pages.index');
    }
    public function setSeo($description){
        SEOTools::setTitle(config('app.name')." PK");
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function services(){

        return view('frontend.pages.services');
    }
}
