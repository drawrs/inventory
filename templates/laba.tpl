{include file="header.tpl"}
	
<header class="header">
	
	{include file="logo.tpl"}
		
	{include file="navigation.tpl"}
		
</header>

<div class="wrapper row-offcanvas row-offcanvas-left">
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="left-side sidebar-offcanvas">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			{include file="user_panel.tpl"}
        	
			{include file="side_menu.tpl"}

		</section>
		<!-- /.sidebar -->
	</aside>
	
	<!-- Right side column. Contains the navbar and content of the page -->
	<aside class="right-side">
		
		{include file="breadcumb.tpl"}
		
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
											{section name=dataProduct loop=$dataProduct}
												<tr>
													<td>{$dataProduct[dataProduct].no}</td>
													<td>{$dataProduct[dataProduct].invoiceNo}</td>
													<td>{$dataProduct[dataProduct].spbNo}</td>

													<td align="right">{$dataProduct[dataProduct].tglLaba}</td>
													<td align="center">{$dataProduct[dataProduct].qtyProduct}</td>
													<td align="right">{buatrp($dataProduct[dataProduct].total)}</td>
													<td align="right">{buatrp($dataProduct[dataProduct].nilaiLaba)}</td>
													<td>
														<a title="Stok Gudang" href="edit_stock.php?module=product&act=stock&productID={$dataProduct[dataProduct].productID}" data-width="900" data-height="420" class="various3 fancybox.iframe"><img src="img/icons/gudang.png" width="18"></a>
														<a title="Edit" href="edit_products.php?module=product&act=edit&productID={$dataProduct[dataProduct].productID}" data-width="900" data-height="420" class="various2 fancybox.iframe"><img src="img/icons/edit.png" width="18"></a>
														<a title="Delete" href="products.php?module=product&act=delete&productID={$dataProduct[dataProduct].productID}&pic={$dataProduct[dataProduct].image}" onclick="return confirm('Anda Yakin ingin menghapus produk {$dataProduct[dataProduct].productName}?');"><img src="img/icons/delete.png" width="18"></a>
													</td>
												</tr>
											{/section}
										</tbody>
									</table>
								</div>
				</section><!-- /.Left col -->
			</div><!-- /.row (main row) -->
		</section><!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

{include file="footer.tpl"}