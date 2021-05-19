<!DOCTYPE html>
<html>
<head>
	<title>Datatable</title>
  	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	<header>
		<h1>Datatable</h1>
		<h4>By Vimal Vashisth</h4>

        @section('user')
		<ul>
			<li><a href="#">Dropdown</a>
				<ul>
					<li><a href="#">Logout</a>
				</ul>
			</li>
		</ul>
        @show
	</header>

    @section('content')
        <table>
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>	
        </table>
    @show

</body>
</html>