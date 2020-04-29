{extends file= "main.tpl" }
{block name=header}
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
                                        <li><a href="{$conf->action_url}sqlBaseShow">BazaSQL</a></li>
					<!--<li><a href="about.html">About</a></li> -->
					<li><a class="btn" href="{$conf->app_url}/app/security/logout.php">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
{/block}   

{block name=content}
    <div class="row">
			
	<!-- Article main content -->
	<article class="col-sm-9 maincontent">
	<header class="page-header">
	<h1 class="page-title">Baza kalkulator:</h1>
	</header>
	<br>          
         <div id="dataBase">
             <table class="pure-table pure-table-bordered">
                <thead>
                    <tr>
                        <th>Kwota</th>
                        <th>RataMies</th>
                        <th>Oproc</th>
                        <th>Wynik</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                    {foreach from=$baza item=data}
                        <tr>
                        <td>{$data["kwota"]}</td>
                        <td>{$data["rataMies"]}</td>
                        <td>{$data["oprocentowanie"]}</td>
                        <td>{$data["wynik"]}</td>
                        <td>{$data["data"]}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
             
        </div>
        </article>

{/block}

{block name=sidebar}
    
    	<!-- Sidebar -->
	<aside class="col-sm-3 sidebar sidebar-right">

            <div class="widget" style="float:left;">
            <h4>TEST</h4>
	<address>
	Szablon test test test
	</address>
            <h4>TEST:</h4>
	<address>
	TestTest
	</address>
	</div>

	</aside>
	<!-- /Sidebar -->
</div>
    
        
    {/block}
    
{block name=footer}

<footer id="footer">
	<div class="footer2">
	<div class="container">
	<div class="row">
					
	<div class="col-md-6 widget">
	<div class="widget-body">
            <p class="simplenav">       
            <a href="{$conf->app_url}">Home</a> | 
            <b><a href="{$conf->action_url}sqlBaseShow">BazaSQL</a></b> |
	    <b><a href="{$conf->app_url}/app/security/logout.php">Wyloguj</a></b>
            </p>
	</div>
        </div>
	<div class="col-md-6 widget">
        <div class="widget-body">
		<p class="text-right">
		Copyright © 2014, Student. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
		</p>
	</div>
        </div>

	</div> <!-- /row of widgets -->
	</div>
	</div>
	</footer>
{/block}