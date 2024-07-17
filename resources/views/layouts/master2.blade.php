<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="alomfker center">
		<meta name="Author" content="almohker center">
		<meta name="Keywords" content="almofker center,dashboard"/>
		@include('layouts.head')
	</head>

	<body class="main-body app sidebar-mini">

        <style type="text/css">
         
            body {
                font-family: 'Cairo', sans-serif;
                font-size: 20px;

            }

        </style>
		<!-- Loader -->
		<div id="global-loader">
			<!--<img src="{{URL::asset('admin/img/loader.svg')}}" class="loader-img" alt="Loader"> -->
		</div>
		<!-- /Loader -->
		@include('layouts.main-sidebar2')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.main-header')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')

				@include('layouts.models')
            	@include('layouts.footer')
				@include('layouts.footer-scripts')
	</body>
</html>
