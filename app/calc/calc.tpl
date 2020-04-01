{extends file="../templates/main.tpl"}


{block name=content}
    
    <div class="row">
			
	<!-- Article main content -->
	<article class="col-sm-9 maincontent">
	<header class="page-header">
	<h1 class="page-title">Kalkulator kredytowy</h1>
	</header>
	<br>                         
        <form action="{$conf->app_url}/app/ctrl.php" method="post">
	<div class="row">
            <div class="col-sm-4">
                <span class="tekscik">Kwota kredytu: </span>
                <input class="form-control" type="text" placeholder="" name="x">
	    </div>
	<div class="col-sm-4">
                <span class="tekscik">Rata miesieczna: </span>
		<input class="form-control" type="text" placeholder="" name="y">
	</div>
	<div class="col-sm-4">
							
		<label class="suw" for="id_op">Oprocentowanie: </label>
		<select name="op">
		<option value="5">5%</option>
		<option value="10">10%</option>
		<option value="15">15%</option>
		<option value="20">20%</option>
		</select><br>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-6">
		<input class="btn btn-action" type="submit" value="Oblicz">
	</div>
	</div>
	<br><br>
	</form>
        
        <div class="messages">
{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
<h4>Miesiace:

	{$res->result}
</h4>
{/if}
        </div>
        
        
        </article>
{/block}

{block name=sidebar}
    
    	<!-- Sidebar -->
	<aside class="col-sm-3 sidebar sidebar-right">

	<div class="widget">
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
            <a href="{$conf->app_url}/index.php">Home</a> | 
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