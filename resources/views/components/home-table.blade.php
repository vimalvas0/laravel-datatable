<!DOCTYPE html>
<html>
<head>
    @section('title')
	    <title>Datatable</title>
    @show
  	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @section('css-styles')
    @show
</head>
<body>
	<header>
		<h1>Datatable</h1>
		<h4>By Vimal Vashisth</h4>
		<ul>
			<li><a href="">{{ auth()->user()->name }}</a>
					<ul>
						<li><a href="{{ route('home.logout') }} ">Logout</a>
					</ul>
			</li>
		</ul>
	</header>


    @section('content')
        
    @show


    @section('js')

    @show

</body>
</html>