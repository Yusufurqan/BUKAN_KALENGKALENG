<!DOCTYPE html>
<html>
	<head>
		<title>Table</title>
		@include('Includes.css')
	</head>
	<body class="bg-dark">
		@include('Includes.sidebar')
		<div class="w3-main" style="margin-left:340px;margin-right:40px">
			 <div class="w3-container" style="margin-top:80px" id="showcase">
			<div class="jumbotron img-fluid bg-info ">
				@include('Includes.jumbotron')
				
			</div>	
	
					@yield('content')
					
			</div>
		</div>
		
		<script type="text/javascript">
			
		</script>
		@include('Includes.js')
	</body>
</html>
