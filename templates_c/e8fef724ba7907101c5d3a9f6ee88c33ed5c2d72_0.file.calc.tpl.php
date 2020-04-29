<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 14:50:29
  from 'C:\xampp\htdocs\Projekty_MEINE\php_07_routing_SQL_MEINE\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea978154f4b29_07202269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8fef724ba7907101c5d3a9f6ee88c33ed5c2d72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty_MEINE\\php_07_routing_SQL_MEINE\\app\\views\\calc.tpl',
      1 => 1588164625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea978154f4b29_07202269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21225806245ea97815457e01_07589447', 'header');
?>
   

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10211729685ea9781547c497_94580235', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104746885ea978154d88c1_66147220', 'sidebar');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15470742685ea978154de555_45298835', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_21225806245ea97815457e01_07589447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_21225806245ea97815457e01_07589447',
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
class Block_10211729685ea9781547c497_94580235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10211729685ea9781547c497_94580235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="row">
			
	<!-- Article main content -->
	<article class="col-sm-9 maincontent">
	<header class="page-header">
	<h1 class="page-title">Kalkulator kredytowy</h1>
	</header>
	<br>                         
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<div class="row">
            <div class="col-sm-4">
                <span class="tekscik">Kwota kredytu: </span>
                <input class="form-control" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" name="x">
	    </div>
	<div class="col-sm-4">
                <span class="tekscik">Rata miesieczna: </span>
		<input class="form-control" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" name="y">
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
        
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <div class="errxx">
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
        </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <div class="messages">
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
    </div>
<?php }?>
<br>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
    <div class="messages">
<h4>Miesiace:

	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</h4>
    </div>
<?php }?>
        
        
        </article>
<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_104746885ea978154d88c1_66147220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_104746885ea978154d88c1_66147220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
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
    
        
    <?php
}
}
/* {/block 'sidebar'} */
/* {block 'footer'} */
class Block_15470742685ea978154de555_45298835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15470742685ea978154de555_45298835',
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
