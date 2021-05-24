<x-home-table>

	@section('title')
		<title>Edit | Datatable</title>
	@endsection

	@section('css-styles')
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
	@endsection

	@section('content')
		<div id="setting">
			<h1>Edit User</h1>
			<form method="post" action="{{ route('home.editUser') }}">
			{{ @csrf_field() }}
				<input name="id" type="hidden" value="{{$user->id}}">
				<label>Update Name :</label>
				<input type="text" name="name" value="{{$user->name}}">
				<label>Update Email :</label>
				<input type="text" name="email" value="{{$user->email}}">
				<label>Update Phone no. :</label>
				<input type="text" name="phone" value="{{ $user->phone }}">
				<button type="submit">Update</button>
			</form>
		</div>
	@endsection


</x-home-table>