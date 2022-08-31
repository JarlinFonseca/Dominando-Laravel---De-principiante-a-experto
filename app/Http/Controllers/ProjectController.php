<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
//use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Forma sin Eloquent
       // $portfolio = DB::table('projects')->get();

      // $portfolio = Project::orderBy('created_at', 'DESC')->get();
      //$projects = Project::latest()->paginate();
            
        
        //return view('portfolio',  compact('portfolio'));

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show($id){
        //$project = Project::find($id);
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }

    

}
