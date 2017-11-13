<!doctype html>
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form PUSTAKA AN-NAHDLAH</title>
	<meta name="description" content="This is inventory application system ">
	<meta name="author" content="CV. ASFA Solution - asfasolution.co.id - agussaputra.com">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="design/css/base.css">
	<link rel="stylesheet" href="design/css/skeleton.css">
	<link rel="stylesheet" href="design/css/layout.css">
	
</head>
<body>

	<!-- Primary Page Layout -->
	
	<div class="alert-danger-login">{$msg}</div>
	<div class="container">
		
		<div class="form-bg">
			<form method="POST" action="index.php?module=login&act=submit">
				<h2>LOGIN PUSTAKA AN-NAHDLAH</h2>
				<p><input type="text" name="username" placeholder="info@asfasolution.co.id" required></p>
				<p><input type="password" name="password" placeholder="123456" required></p>
				<button type="submit"></button>
			<form>
		</div>

	
		<p class="forgot">
			Copyright &copy; PUSTAKA AN-NAHDLAH <br>
			Bukit Cimanggu City Blok J2 No.20, Jl.KH.Shaleh Iskandar<br>
			Bogor, Jawa Barat, Indonesia
		
		</p>


	</div><!-- container -->
	
<!-- End Document -->
</body>
</html>