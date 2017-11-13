<!DOCTYPE html>
<html>
<head>
	<title>kkeke</title>
</head>
<body>
<script type='text/javascript'>
	<script type='text/javascript'>
					var sLevel = '"+ $dataLogin['level'] +"';
					// delete cookie
					//deleteCookie('asda');
					// set cookie
					writeCookie('asda', sLevel, 1);
					function writeCookie(name,value,days) {
					    var date, expires;
					    if (days) {
					        date = new Date();
					        date.setTime(date.getTime()+(days*24*60*60*1000));
					        expires = '; expires=' + date.toGMTString();
					    }else{
					        expires = '';
					    }
					    document.cookie = name + '=' + value + expires + '; path=/';
					}
					var deleteCookie = function(name) {
					    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
					}

					var sLevel = readCookie('asda');
					console.log(sLevel);
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
</script>
</body>
</html>