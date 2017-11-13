<?php /* Smarty version Smarty-3.1.11, created on 2017-11-10 22:38:09
         compiled from "./templates/user_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15338952585a05c7e1963783-39873469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1593a5f160ce5ebd865534a4f17d7eb84d3c8cee' => 
    array (
      0 => './templates/user_panel.tpl',
      1 => 1416296180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15338952585a05c7e1963783-39873469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginPhoto' => 0,
    'loginStaffNickName' => 0,
    'loginStaffPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a05c7e1999809_11449833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05c7e1999809_11449833')) {function content_5a05c7e1999809_11449833($_smarty_tpl) {?><!-- Sidebar user panel -->
<div class="user-panel">
	<div class="pull-left image">
		<?php if ($_smarty_tpl->tpl_vars['loginPhoto']->value!=''){?>
			<img src="img/staffs/thumb/small_<?php echo $_smarty_tpl->tpl_vars['loginPhoto']->value;?>
" class="img-circle" alt="User Image" />
		<?php }?>
	</div>
	<div class="pull-left info">
		<p>Hello, <?php echo $_smarty_tpl->tpl_vars['loginStaffNickName']->value;?>
</p>
		<?php echo $_smarty_tpl->tpl_vars['loginStaffPosition']->value;?>

	</div>
</div>
<?php }} ?>