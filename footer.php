<?php
// display
$smarty->assign('year', $year);
$smarty->display($page);
?>
<script type='text/javascript'>
			var level = readCookie('userLevel');
			var sLevel = level.replace(/[^\w\s]/gi, '');
			console.log(sLevel);
			if (sLevel == "admin") { // admin
				$('#menuPembelian').remove();
				$('#menuPenjualan').remove();
				$('#menuPengembalian').remove();

				console.log('menuPembelian menuPenjualan menuPengembalian');
			} else { // kasir
				$('#menuMasterData').remove();
				$('#menuLaporan').remove();
				$('#menuHutang').remove();
			}

			function readCookie(name) {
			    var i, c, ca, nameEQ = name + '=';
			    ca = document.cookie.split(';');
			    for(i=0;i < ca.length;i++) {
			        c = ca[i];
			        while (c.charAt(0)==' ') {
			            c = c.substring(1,c.length);
			        }
			        if (c.indexOf(nameEQ) == 0) {
			            return c.substring(nameEQ.length,c.length).replace(/[^\w\s]/gi, '');
			        }
			    }
			    return '';
			}
		</script>