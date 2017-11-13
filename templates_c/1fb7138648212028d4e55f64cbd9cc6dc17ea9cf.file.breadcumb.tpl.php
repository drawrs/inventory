<?php /* Smarty version Smarty-3.1.11, created on 2017-11-10 22:38:09
         compiled from "./templates/breadcumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4435708265a05c7e1e2d8b0-99683036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb7138648212028d4e55f64cbd9cc6dc17ea9cf' => 
    array (
      0 => './templates/breadcumb.tpl',
      1 => 1415194988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4435708265a05c7e1e2d8b0-99683036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcumbTitle' => 0,
    'breadcumbTitleSmall' => 0,
    'breadcumbMenuName' => 0,
    'breadcumbMenuSubName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a05c7e1e492f2_40335180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05c7e1e492f2_40335180')) {function content_5a05c7e1e492f2_40335180($_smarty_tpl) {?><!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?php echo $_smarty_tpl->tpl_vars['breadcumbTitle']->value;?>

		<small><?php echo $_smarty_tpl->tpl_vars['breadcumbTitleSmall']->value;?>
</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->tpl_vars['breadcumbMenuName']->value;?>
</a></li>
		<li class="active"><?php echo $_smarty_tpl->tpl_vars['breadcumbMenuSubName']->value;?>
</li>
	</ol>
</section><?php }} ?>