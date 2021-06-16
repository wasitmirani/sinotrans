<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
class FrontEndController extends Controller
{
    //

    public function index(){
        SEOTools::setTitle(config('app.name')." PK");
        SEOTools::setDescription(config('app.name'));

        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about');
    }
}
