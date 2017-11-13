<!DOCTYPE html>
<html>
<head>
	<title>haha</title>
</head>
<body>
<script type="text/javascript">
	var sLevel = readCookie('levelUser')
	console.log(sLevel);
	if (sLevel == 1) {
		console.log('menuPembelian menuPenjualan menuPengembalian');
	} else if (sLevel == 2) {
		console.log('menuMasterData menuLaporan menuHutang');
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
	            return c.substring(nameEQ.length,c.length);
	        }
	    }
	    return '';
	}
</script>
</body>
</html>