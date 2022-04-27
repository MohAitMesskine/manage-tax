<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="{{config('app.languages')[app()->getLocale()]['dir'] }}">
<head>
	<title>@yield('title','') | Communite -Taxe</title>
	<!-- initiate head with meta tags, css and script -->
	@include('admin.include.head')

</head>
<body id="app" >
    <div class="wrapper">
    	<!-- initiate header-->
    	@include('admin.include.header')
    	<div class="page-wrap">
	    	<!-- initiate sidebar-->
	    	@include('admin.sidebar')

	    	<div class="main-content">
	    		<!-- yeild contents here -->
	    		@yield('content')
	    	</div>

	    	<!-- initiate chat section-->
	    	@include('admin.include.chat')


	    	<!-- initiate footer section-->
	    	@include('admin.include.footer')

    	</div>
    </div>

	<!-- initiate modal menu section-->
	@include('admin.include.modalmenu')

	<!-- initiate scripts-->
	@include('admin.include.script')
</body>
</html>
