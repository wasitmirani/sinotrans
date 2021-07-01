<?php

namespace App\Http\Controllers;

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
}
