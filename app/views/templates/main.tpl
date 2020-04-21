<!DOCTYPE html>
<head>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Kalkulator</title>

	<link rel="shortcut icon" href="{$conf->app_url}/assets/images/gt_favicon.png">
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" 
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
{block name=header}{/block}
    

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{$conf->app_url}">Home</a></li>
			<li class="active">About</li>
		</ol>

        {block name=content}{/block}
        {block name=sidebar}{/block}
	</div>
        <!-- /container -->
        
        {block name=footer}{/block}
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{$conf->app_url}/assets/js/headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/jQuery.headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/template.js"></script>
	
	

</body>
</html>
