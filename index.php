<?php
// include header
include "header.php";
// set the tpl page
$page = "index.tpl";

// get the variable method
$module = $_GET['module'];
$act = $_GET['act'];

// function for validation from injection
function injection($data){
	$filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
	return $filter;
}

if ($module == 'login' && $act == 'submit')
{
	$username = injection($_POST['username']);
	$password = injection($_POST['password']);

	
	// injection
	$usernameInjection = mysqli_real_escape_string($connect, $username);
	//$passwordInjection = md5(mysqli_real_escape_string($connect, $password));
	$passwordInjection = mysqli_real_escape_string($connect, $password);
	// find the account
	$queryLogin = "SELECT * FROM as_staffs WHERE email = '$usernameInjection' AND password = '$passwordInjection' AND status = 'Y'";
	$sqlLogin = mysqli_query($connect, $queryLogin);
	
	// count 
	$numLogin = mysqli_num_rows($sqlLogin);
	$dataLogin = mysqli_fetch_array($sqlLogin);
	//echo "sinin";
	if ($numLogin > 0)
	{
		//echo "sini juga";
		session_start();
		
		// create the session variable
		$_SESSION['staffID'] = $dataLogin['staffID'];
		//$_SESSION['level'] = $dataLogin['level'];
		$_SESSION['email'] = $dataLogin['email'];
		$_SESSION['staffName'] = $dataLogin['staffName'];
		$_SESSION['staffCode'] = $dataLogin['staffCode'];
		$_SESSION['staffNickName'] = $dataLogin['staffNickName'];
		$_SESSION['position'] = $dataLogin['position'];
		$_SESSION['lastLogin'] = date('Y-m-d H:i:s'); 

		// Put session
		?>
			<script type='text/javascript'>
					if (<?= $dataLogin['level'] ?> == "1") {
						var sLevel = "admin";
					} else {
						var sLevel = "kasir";
					}
					// delete cookie
					console.log("heere");
					console.log(sLevel);
					deleteCookie('userLevel');
					// set cookie
					writeCookie('userLevel', sLevel, 1);
					console.log("heere2");
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
					function deleteCookie(name) {
					    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
					}
				</script>
		<?php
		// set level ke 1 lagi
		$_SESSION['level'] = '1';
		?>
		<script type="text/javascript">
			window.location.href = 'home.php?msg=Login berhasil';
		</script>
		<?php
		// sleep(10);
		// // redirect to the dashboard
		// header("Location: home.php?msg=Login berhasil");
	}
	
	else
	{
		header("Location: index.php?msg=Login salah, silahkan coba lagi");
	}
}

$smarty->assign("msg", $_GET['msg']);

// include footer
include "footer.php";
?>