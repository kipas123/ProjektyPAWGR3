<!DOCTYPE html>
<head>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Kalkulator</title>

	<link rel="shortcut icon" href="{$conf->app_url}/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{$conf->app_url}"><img src="{$conf->app_url}/assets/images/logo.png" width="148" height="70"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="{$conf->app_url}">Home</a></li>
					<!--<li><a href="about.html">About</a></li> -->
					<li><a class="btn" href="{$conf->app_url}/app/security/logout.php">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{$conf->app_url}">Home</a></li>
			<li class="active">About</li>
		</ol>

        {block name=content} Domyślna treść zawartości .... {/block}
        {block name=sidebar} Domyślna treść zawartości .... {/block}
	</div>
        <!-- /container -->
        
        {block name=footer} Domyślna treść zawartości .... {/block}
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{$conf->app_url}/assets/js/headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/jQuery.headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/template.js"></script>
	
	

</body>
</html>
