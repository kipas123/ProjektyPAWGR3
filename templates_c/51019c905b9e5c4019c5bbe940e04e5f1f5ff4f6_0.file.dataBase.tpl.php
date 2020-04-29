<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 14:50:28
  from 'C:\xampp\htdocs\Projekty_MEINE\php_07_routing_SQL_MEINE\app\views\dataBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea97814093b10_37735466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51019c905b9e5c4019c5bbe940e04e5f1f5ff4f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty_MEINE\\php_07_routing_SQL_MEINE\\app\\views\\dataBase.tpl',
      1 => 1588164587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea97814093b10_37735466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6496872635ea97814021044_95308520', 'header');
?>
   

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7900005945ea97814046102_95667313', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12332782555ea97814079d12_44634474', 'sidebar');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3080228515ea9781407f5d8_59174415', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_6496872635ea97814021044_95308520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6496872635ea97814021044_95308520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/logo.png" width="148" height="70"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Home</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
sqlBaseShow">BazaSQL</a></li>
					<!--<li><a href="about.html">About</a></li> -->
					<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_7900005945ea97814046102_95667313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7900005945ea97814046102_95667313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                    
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['baza']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                        <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["kwota"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["rataMies"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["oprocentowanie"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["wynik"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['data']->value["data"];?>
</td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
             
        </div>
        </article>

<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_12332782555ea97814079d12_44634474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_12332782555ea97814079d12_44634474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
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
    
        
    <?php
}
}
/* {/block 'sidebar'} */
/* {block 'footer'} */
class Block_3080228515ea9781407f5d8_59174415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3080228515ea9781407f5d8_59174415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<footer id="footer">
	<div class="footer2">
	<div class="container">
	<div class="row">
					
	<div class="col-md-6 widget">
	<div class="widget-body">
            <p class="simplenav">       
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Home</a> | 
            <b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
sqlBaseShow">BazaSQL</a></b> |
	    <b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Wyloguj</a></b>
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
<?php
}
}
/* {/block 'footer'} */
}
