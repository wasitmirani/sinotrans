<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function projects(){
        return view('backend.pages.projects');
    }

    public function create(){

        return view('backend.pages.project.create');
    }

    public function industries(){
        $industries=Industry::all();
        return response()->json(['industries' => $industries]);
    }
public function store(Request $request){
        dd($request->all());
    }
}
