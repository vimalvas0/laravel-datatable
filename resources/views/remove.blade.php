<!DOCTYPE html>
<html>
<head>
	<title>Delete | Datatable</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="{{ asset('css/delete.css') }}">
</head>
<body>
	<div id="setting">
		<h1>Delete Account</h1>
		<form method="post" action="{{ route('home.removeUser') }}" id="deleteForm">
        {{ @csrf_field() }}
            <input type="hidden" name="id" value="{{$id}}">
			<label>Are you sure you want to delete the user?</label>
			<button type="submit">Delete</button>
		</form>
	</div>
</body>
</html>