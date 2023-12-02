
@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{route('storeTest')}}">
     @csrf
     <input name="name" />
     @error("name")
         <p>{{  $message  }}</p>
     @endif
     <textarea name="description"></textarea>
     @error("description")
         <p>{{ $message  }}</p>
     @endif
     <input type="submit" value="add">
</form>
