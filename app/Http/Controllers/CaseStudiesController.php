<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Industry;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class CaseStudiesController extends Controller
{
    //
    public function index(){
        $this->setSeo("Case Studies","Case Studies");
        $industries=Project::latest()->groupBy('industry_id')->pluck('industry_id');
        $industries=Industry::whereIn('id',$industries)->select('id','name')->get();
        $projects=Project::with('industry')->take(9)->get();
        return view('frontend.pages.projects.index',compact('industries','projects'));
    }

    public function projectDetail(Request $request){
        $project=Project::where('slug',$request->slug)->first();

        $industries=Industry::whereNotIn('id',[$project->industry_id])->get();
        return view('frontend.pages.projects.detail',compact('project','industries'));
    }

    public function setSeo($title=null,$description){
        SEOTools::setTitle($title." | ".config('app.name'));
        SEOTools::setDescription(config('app.name')." ".$description);
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@'.url('/'));
        SEOTools::jsonLd()->addImage(url('/').'/images/logo/logo-dark.png');
    }
}
