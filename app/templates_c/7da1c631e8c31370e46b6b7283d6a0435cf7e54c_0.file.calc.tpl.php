<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 16:27:48
  from 'C:\xampp\htdocs\Projekty_MEINE\php_05_MEINE\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e835364787ac5_80628599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da1c631e8c31370e46b6b7283d6a0435cf7e54c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekty_MEINE\\php_05_MEINE\\app\\calc.tpl',
      1 => 1585664857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e835364787ac5_80628599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18705180845e83536477bbe1_51653411', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10368493735e835364786900_70392077', 'sidebar');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9155407525e835364786e70_12310236', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_18705180845e83536477bbe1_51653411 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18705180845e83536477bbe1_51653411',
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
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
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
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
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
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<h4>Miesiace:

	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</h4>
<?php }?>
        </div>
        
        
        </article>
<?php
}
}
/* {/block 'content'} */
/* {block 'sidebar'} */
class Block_10368493735e835364786900_70392077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_10368493735e835364786900_70392077',
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
class Block_9155407525e835364786e70_12310236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9155407525e835364786e70_12310236',
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
/index.php">Home</a> | 
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
