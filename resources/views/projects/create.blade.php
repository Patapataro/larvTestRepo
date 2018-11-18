@extends('layout')
   
   
@section('content')
    <h1>Create a New Project</h1>
    
    <form method="POST" action="/projects">
       @csrf
       @include('errors')

       
        <div>
           <label for="title" style="color:red;">
                @foreach($errors->get('title') as $error)
                    {{ $error }}
                @endforeach
           </label>
           
            <div>
                <input class="{{ $errors->get('title')? 'input-red' : '' }}" type="text" name="title" placeholder="Project title" autocomplete="on" value="{{ old('title') }}" required>
            </div>
        </div>
        
        <br>
        
        <label for="title" style="color:red;">
            @foreach($errors->get('description') as $error)
                {{ $error }}
            @endforeach
       </label>
        
        <div>
            <textarea class="{{ $errors->get('description')? 'input-red' : '' }}" name="description" id="" cols="30" rows="10" placeholder="Project description" autocomplete="on" required >{{ old('description') }}</textarea>
        </div>
        
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
    
@endsection