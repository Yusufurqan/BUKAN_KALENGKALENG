<!DOCTYPE html>
<html>
	<head>
		<title>table absen</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
        
                @include('view')   
                @yield('content')
	

	<script src="{{asset('js/siswa.js')}}"></script>
    </body>
</html>