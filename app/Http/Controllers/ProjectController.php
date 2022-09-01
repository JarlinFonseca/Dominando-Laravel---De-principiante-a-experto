<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
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
//Route model binding: Project $id
//Ahora el $id es un objeto Project
    public function show(Project $project){
        //$project = Project::find($id);
        return view('projects.show', [
           // 'project' => Project::findOrFail($id)
           'project' =>  $project
        ]);
    }

    public function create(){
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request){

        //Primera forma
        /*
        $title = request('title');
        $url = request('url');
        $descripcion = request('description');
        

         Project::create([
            'title' => $title,
            'url' => $url,
            'description' => $descripcion
        ]); */

        //Segunda forma
       // Project::create(request()->all());

       //Tercera forma
       //Project::create(request()->only('title', 'url', 'description'));

       //Cuarta fornma
    /*    $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
       ]);

       Project::create($fields); */

       Project::create($request->validated());

        return redirect()->route('projects.index');
    }

    public function edit(Project $project){

        return view('projects.edit', [
            'project' =>  $project
         ]);

    }

    public function update(Project $project, SaveProjectRequest $request){
        //Primera forma sin request pero no valida los campos
       /*  $project->update( [
                'title' => request('title'),
                'url' => request('url'),
                'description' => request('description')

            ]); */
            $project->update($request->validated());

            return redirect()->route('projects.show', $project);
    }

    public function destroy(Project $project){
        $project->delete();

        return redirect()->route('projects.index');
    }
}
