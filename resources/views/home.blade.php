<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CommuneAitMeloul - Les Impots</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>

        <!-- themekit admin template asstes -->
        <link rel="stylesheet" href="{{ asset('all.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body class="home-gradient-bg">
		<div class="container ">
			<div class="d-flex justify-content-between my-5">
				<div>
					<a href="#">
		            	<img height="30" src="{{ asset('img/logo.png') }}">
		            </a>
				</div>
				<div>
					<a class="btn btn-success btn-rounded mr-3" href="{{url('login')}}/">Inscrire</a>
					<a class="btn btn-warning btn-rounded" href="https://arthemicofficial.github.io/Radmin-Laravel-Admin-Starter-Kit/">Site Officiel</a>
				</div>
			</div>
	    	<div class="banner-text m-4 d-relative">
	    		<img height="50" class="d-absolute left-0"  src="{{asset('/img/p1.png')}}">
	    		<img height="100" width="130px" style="margin: 150px" class="d-absolute"  src="{{asset('/img/logoo.png')}}">
	    		<img height="50" class="d-absolute right-0"  src="{{asset('/img/s2-2.png')}}">
	    		Commune Ait Meloul <br> Application Pour Gérer Les Impots
	    	</div>



		    <div style="margin: 80px"  class="row justify-content-center">
		        <div class="my-5"style="margin: 150px">
		        	<p class="text-center">Contactez nous ??</p>
		        	<div class="card-body template-demo text-center">
                        <a href="#" class="btn social-btn text-white btn-google"><i class="ik ik-globe"></i></a>
                        <a href="#" class="btn social-btn text-white btn-facebook "><i class="fab fa-github"></i></a>
                        <a href="#" class="btn social-btn text-white btn-twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn social-btn text-white btn-linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>

		        </div>
		    </div>
		</div>
		<script src="{{ asset('all.js') }}"></script>

    </body>
</html>

