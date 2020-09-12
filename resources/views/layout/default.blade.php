<!DOCTYPE html>
<html>
<head>
    <title>SURVEY KEPUASAN PELANGGAN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body style="background-color: orange">
    
<div class="container">
	<br/>
	<br/>
	<div class="text-center">
	</div>
	<br/>
    @yield('content')
</div>
   
</body>

</html>