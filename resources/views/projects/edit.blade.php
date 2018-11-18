@extends('layout')


@section('content')
    <h1>Edit Project</h1>
    
    <form action="/projects/{{ $project->id }}" method="POST">
       {{ method_field('PATCH')  }}
       {{ csrf_field() }}
        <div>
            <label for="title" class="label" name="title" placeholder="Title">Title</label>
            <div>
                <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
            </div>
            
            <label for="description">Description</label>
            
            <div>
                <textarea name="description" id="" cols="30" rows="10">{{ $project->description }}</textarea>
            </div>

            <button type="submit">Update Project</button>
        </div>
        
    </form>
    
    <br>
    
    <form action="/projects/{{ $project->id }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button type="submit">
            Delete Project
        </button>
    </form>
    
@endsection