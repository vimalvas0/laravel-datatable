<x-home-table>



@section('content')

<a href="{{ route('gallery.index') }}"><button id="gallery">Go To Gallery</button></a>

<table>
	  <tr>
	    <th>Name</th>
	    <th>Email</th>
	    <th>Role</th>
        <th>Phone</th>
        @can('view', Auth::user())
            <th>Actions</th>
        @endcan
	  </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>{{$user->phone}}</td>
        @can('view', Auth::user())
            <td>
                <a href="{{ route('home.edit', $user->id) }} ">Edit</a>
                <a href="{{ route('home.remove', $user->id) }}">Remove</a>
            </td>
        @endcan
    </tr>
    @endforeach
     
	</table>

@endsection

</x-home-table>
