<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
//use DB;

class PortfolioController extends Controller
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

        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    

}
