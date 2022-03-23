<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.loader {
	
	  left: 0px;
	  top: 0px;
	  width: 100%;
	  height: 100%;
	  z-index: 9999;
	  background: url("{{asset('image/round2.gif')}}") 50% 50% no-repeat rgb(249,249,249);
	  background-color: #ffffff; 
	}
	</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
			<div class="loader"></div>
			<div class="wrapper">
				
					@include('layouts.header')
					@include('layouts.head')
					@include('layouts.sidebar')
					@include('layouts.neck')
					@yield('content')
			</div>

</body>

</html>


