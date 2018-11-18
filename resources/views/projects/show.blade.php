@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    
    <p>{{ $project->description }}</p>
    
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
    
    
    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <div>
                   <form method="POST" action="/complete-tasks/{{ $task->id }}">
                      @if($task->completed)
                          @method('DELETE')
                      @endif
                      
                       @csrf
                        <label for="completed" class="{{ $task->completed ? 'is-complete' : '' }}">
                           <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }} required>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
        <hr>
    @endif
    
    <!-- Add a New Task -->

    
    <form action="/projects/{{ $project->id }}/tasks" method="POST">
        @csrf
               
        <div>
           <div>
                <label for="description">New Task</label>
            </div>
            
            <label for="" class="text-red">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </label>
            
            <div>
                <input class="{{ $errors->all()? 'input-red' : '' }}" type="text" name="description">
            </div>
            <button type="submit">
                Add Task
            </button>
        </div>
        @include('errors')
    </form>
    
@endsection