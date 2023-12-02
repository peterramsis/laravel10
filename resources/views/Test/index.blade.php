<h1><a href="{{route('createTest')}}">Create</a></h1>
<br>


@if(count($test) > 0)

<table width="100%">
    <tr>
        <td>name</td>
        <td>Description</td>
         <td>create_at</td>
         <td>custom_deleted_at</td>
         <td>Delete</td>
    </tr>

    @foreach($test as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->create_at}}</td>
        <td>{{$data->custom_deleted_at}}</td>
        <td>
            <form method="POST" action="{{ route("deleteTest" , $data->id) }}">
                @method("DELETE")
                @csrf
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endif
