<?php
include "header.php";
session_start();

mysqli_query($connect, "UPDATE as_staffs SET lastLogin = '$_SESSION[lastLogin]' WHERE staffID = '$_SESSION[staffID]'");

session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<script type="text/javascript">

	deleteCookie('userLevel');
	function deleteCookie(name) {
					    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
					}
					console.log("logouted");
</script>
</body>
</html>
<?php
header('Location: index.php?msg=Anda telah keluar [Sign Out] dari aplikasi.');
?>