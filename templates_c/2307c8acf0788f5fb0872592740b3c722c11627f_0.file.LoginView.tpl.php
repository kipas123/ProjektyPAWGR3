<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-21 23:26:28
  from 'C:\xampp\htdocs\Projekty_MEINE\php_07_routing_MEINE\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9f65040b0f24_11901476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2307c8acf0788f5fb0872592740b3c722c11627f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty_MEINE\\php_07_routing_MEINE\\app\\views\\LoginView.tpl',
      1 => 1587501655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5e9f65040b0f24_11901476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4543145355e9f6504061701_89447519', 'header');
?>
   



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14543242715e9f6504089586_21480907', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4926356045e9f650409e927_20565923', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_4543145355e9f6504061701_89447519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4543145355e9f6504061701_89447519',
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
					<!--<li><a href="about.html">About</a></li> -->
					<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Zaloguj</a></li>
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
class Block_14543242715e9f6504089586_21480907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14543242715e9f6504089586_21480907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_4926356045e9f650409e927_20565923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4926356045e9f650409e927_20565923',
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
	    <b><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php">Zaloguj</a></b>
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
