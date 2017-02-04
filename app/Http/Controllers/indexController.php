<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class indexController extends Controller
{
    public function index(){

    	$projects=Project::all()->forPage(1,3);
    	return view('pages.home',compact('projects'));
    }

    public function view($id){
		
		$project=Project::all()->find($id);
		if($project==null){

			return 'not found';
		}
		else{
			return view('pages.project',compact('project'));
		}

    	
    }
}
