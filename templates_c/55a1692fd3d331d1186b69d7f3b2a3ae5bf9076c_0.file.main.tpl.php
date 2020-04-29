<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 09:46:38
  from 'C:\xampp\htdocs\Projekty_MEINE\php_07_routing_SQL_MEINE\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea930de024402_80465200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a1692fd3d331d1186b69d7f3b2a3ae5bf9076c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty_MEINE\\php_07_routing_SQL_MEINE\\app\\views\\templates\\main.tpl',
      1 => 1587501596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea930de024402_80465200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<head>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Kalkulator</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/gt_favicon.png">
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" 
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13203390515ea930ddefc9c6_98058365', 'header');
?>

    

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Home</a></li>
			<li class="active">About</li>
		</ol>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7605609215ea930ddf17cc1_00676561', 'content');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2458199225ea930ddf248d8_54956609', 'sidebar');
?>

	</div>
        <!-- /container -->
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20837112315ea930ddf320e1_79730280', 'footer');
?>

		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/template.js"><?php echo '</script'; ?>
>
	
	

</body>
</html>
<?php }
/* {block 'header'} */
class Block_13203390515ea930ddefc9c6_98058365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13203390515ea930ddefc9c6_98058365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_7605609215ea930ddf17cc1_00676561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7605609215ea930ddf17cc1_00676561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_2458199225ea930ddf248d8_54956609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_2458199225ea930ddf248d8_54956609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sidebar'} */
/* {block 'footer'} */
class Block_20837112315ea930ddf320e1_79730280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20837112315ea930ddf320e1_79730280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
