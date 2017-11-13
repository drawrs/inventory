<?php /* Smarty version Smarty-3.1.11, created on 2017-11-11 00:44:06
         compiled from "./templates/laba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7309673775a05c9107ee400-48437645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9871c054e04eb6244cb45ae50850d2478f42588' => 
    array (
      0 => './templates/laba.tpl',
      1 => 1510335845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7309673775a05c9107ee400-48437645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a05c91100e063_48246243',
  'variables' => 
  array (
    'dataProduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05c91100e063_48246243')) {function content_5a05c91100e063_48246243($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
				
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>NO <i class="fa fa-sort"></i></th>
												<th>InvoiceNo <i class="fa fa-sort"></i></th>
												<th>SpbNo <i class="fa fa-sort"></i></th>
												<th>Tgl Laba<i class="fa fa-sort"></i></th>
												<th>Qty Product <i class="fa fa-sort"></i></th>
												<td>Total Pembayaran</td>
												<th>Nilai Laba<i class="fa fa-sort"></i></th>
												<th width="80">AKSI</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['name'] = 'dataProduct';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dataProduct']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dataProduct']['total']);
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['no'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['invoiceNo'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['spbNo'];?>
</td>

													<td align="right"><?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['tglLaba'];?>
</td>
													<td align="center"><?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['qtyProduct'];?>
</td>
													<td align="right"><?php echo buatrp($_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['total']);?>
</td>
													<td align="right"><?php echo buatrp($_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['nilaiLaba']);?>
</td>
													<td>
														<a title="Stok Gudang" href="edit_stock.php?module=product&act=stock&productID=<?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['productID'];?>
" data-width="900" data-height="420" class="various3 fancybox.iframe"><img src="img/icons/gudang.png" width="18"></a>
														<a title="Edit" href="edit_products.php?module=product&act=edit&productID=<?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['productID'];?>
" data-width="900" data-height="420" class="various2 fancybox.iframe"><img src="img/icons/edit.png" width="18"></a>
														<a title="Delete" href="products.php?module=product&act=delete&productID=<?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['productID'];?>
&pic=<?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['image'];?>
" onclick="return confirm('Anda Yakin ingin menghapus produk <?php echo $_smarty_tpl->tpl_vars['dataProduct']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dataProduct']['index']]['productName'];?>
?');"><img src="img/icons/delete.png" width="18"></a>
													</td>
												</tr>
											<?php endfor; endif; ?>
										</tbody>
									</table>
								</div>
				</section><!-- /.Left col -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>