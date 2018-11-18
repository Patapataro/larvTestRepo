<?php

namespace App\Http\Controllers;

use App\Project;

//use App\Services\Twitter;

use Illuminate\Http\Request;

use Illuminate\Filesystem\Filesystem;

class ProjectsController extends Controller
{
    public function index()
    {
        
        $projects = Project::all();
                
        return view('projects.index', compact('projects'));
    }
    
    public function create()
    {
        return view('projects.create');
    }
    
//    public function show(Filesystem $file, Twitter $twitter)
//    {
//        dd($twitter);
//        
//        return view('projects.show', compact('project'));   
//    }    
    
    public function edit(Project $project) 
    {
        
        return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project)
    {        
        $project->update(request(['title', 'description']));
        
        return redirect('/projects');
    }    
    
    public function destroy(Project $project)
    {
        $project->delete($project);
        
        return redirect('/projects');
    }

    public function store()
    {
        Project::create(
            request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
            ]
        ));
                
        return redirect('/projects');
        
    }
}
