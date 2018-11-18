@if($errors->any())
   @foreach($errors->all() as $error)
    <ul>
        <li class="text-red">{{ $error }}</li>
    </ul>
    @endforeach
@endif