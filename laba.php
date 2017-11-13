<?php
// include header
include "header.php";
// set the tpl page
$page = "laba.tpl";

$module = $_GET['module'];
$act = $_GET['act'];


// get last sort product number
		$queryNoProduct = "SELECT productCode FROM as_products ORDER BY productCode DESC LIMIT 1";
		$sqlNoProduct = mysqli_query($connect, $queryNoProduct);
		$numsNoProduct = mysqli_num_rows($sqlNoProduct);
		$dataNoProduct = mysqli_fetch_array($sqlNoProduct);
		
		$start = substr($dataNoProduct['productCode'],0-5);
		$next = $start + 1;
		$tempNo = strlen($next);
		
		if ($numsNoProduct == '0')
		{
			$productNo = "0000";
		}
		elseif ($tempNo == 1)
		{
			$productNo = "0000";
		}
		elseif ($tempNo == 2)
		{
			$productNo = "000";
		}
		elseif ($tempNo == 3)
		{
			$productNo = "00";
		}
		elseif ($tempNo == 4)
		{
			$productNo = "0";
		}
		elseif ($tempNo == 5)
		{
			$productNo = "";
		}
		
		$productCode = $productNo.$next;
		
		$smarty->assign("productCode", $productCode);
		
		// create new object pagination
		$p = new PaginationProduct;
		// limit 20 data for page
		$limit  = 10;
		$position = $p->searchPosition($limit);
		
		// showing up the product data
		$queryProduct = "SELECT * FROM as_laba NATURAL JOIN as_buy_transactions ORDER BY labaID DESC LIMIT $position,$limit";
		$sqlProduct = mysqli_query($connect, $queryProduct);
		
		// fetch data
		$i = 1 + $position;
		while ($dtProduct = mysqli_fetch_array($sqlProduct))
		{
			
			$dataProduct[] = array(	'labaID' => $dtProduct['labaID'],
									'invoiceID' => $dtProduct['invoiceID'],
									'qtyProduct' => $dtProduct['qtyProduct'],
									'nilaiLaba' => $dtProduct['nilaiLaba'],
									'tglLaba' => $dtProduct['tglLaba'],
									'no' => $i,
									'invoiceID' => $dtProduct['invoiceID'],
									'invoiceNo' => $dtProduct['invoiceNo'],
									'invoiceDate' => $dtProduct['invoiceDate'],
									'bbmNo' => $dtProduct['bbmNo'],
									'spbNo' => $dtProduct['spbNo'],
									'paymentType' => $dtProduct['paymentType'],
									'expiredPayment' => $dtProduct['expiredPayment'],
									'ppnType' => $dtProduct['ppnType'],
									'ppn' => $dtProduct['ppn'],
									'total' => $dtProduct['total'],
									'basic' => $dtProduct['basic'],
									'discount' => $dtProduct['discount'],
									'grandtotal' => $dtProduct['grandtotal']
									);
			$i++;
		}

		//print_r($dataProduct);
		//return;

//print_r($dataLaba);
$smarty->assign("htes", "halloo");

$smarty->assign("dataProduct", $dataProduct);
$smarty->assign("msg", $_GET['msg']);
$smarty->assign("breadcumbTitle", "Laba");
$smarty->assign("breadcumbTitleSmall", "Halaman penghitung laba");
$smarty->assign("breadcumbMenuName", "Home");
$smarty->assign("breadcumbMenuSubName", "Dashboard");

// include footer
include "footer.php";
?>
