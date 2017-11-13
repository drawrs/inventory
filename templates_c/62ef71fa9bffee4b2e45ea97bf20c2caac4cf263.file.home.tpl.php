<?php /* Smarty version Smarty-3.1.11, created on 2017-11-10 23:34:39
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931074345a05d51f519ca7-85504833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1467145340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931074345a05d51f519ca7-85504833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loginStaffNickName' => 0,
    'loginLastLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a05d51f5b75a1_46224882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05d51f5b75a1_46224882')) {function content_5a05d51f5b75a1_46224882($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
<header class="header">
	
	<?php echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
	<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
</header>

<div class="wrapper row-offcanvas row-offcanvas-left">
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="left-side sidebar-offcanvas">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<?php echo $_smarty_tpl->getSubTemplate ("user_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        	
			<?php echo $_smarty_tpl->getSubTemplate ("side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		</section>
		<!-- /.sidebar -->
	</aside>
	
	<!-- Right side column. Contains the navbar and content of the page -->
	<aside class="right-side">
		
		<?php echo $_smarty_tpl->getSubTemplate ("breadcumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		
		<!-- Main content -->
		<section class="content">
		
			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<section class="col-lg-12 connectedSortable">
				
					Hai <b><?php echo $_smarty_tpl->tpl_vars['loginStaffNickName']->value;?>
</b>, Assalamu'alaikum Wr Wb, silahkan melakukan pengolahan data sesuai kewenangan Anda...!
					Selamat bekerja dengan penuh amanah, tanggung jawab, dan profesional. Semoga Allah SWT memberkahi hidup kita...Aamiin.
					<br><br>
					Login Terakhir : <?php echo $_smarty_tpl->tpl_vars['loginLastLogin']->value;?>

				</section><!-- /.Left col -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>