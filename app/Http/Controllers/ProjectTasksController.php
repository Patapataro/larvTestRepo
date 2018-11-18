<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
s
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|max:255']);
        
        $project->addTask($attributes);

        return back();
    }

//    public function update(Task $task)
//    {
//        
//        $method = request()->has('completed')? 'complete' : 'incomplete';
//        
//        $task->$method();
//        
//    // short hand version  
////        request()->has('complete')? $task->completed() : $task->incomplete();
//        
//    // is the same as above 
////        if(request()->has('completed'))
////        {
////            $task->completed();
////        } else (request()->has('completed'))
////        {
////            $task->incomplete();
////        }
////        
////        request
////    
//    // entering boolan into complete is the same
////        $task->complete(request()->has('completed'));
//        
//        return back();
//    }

}
