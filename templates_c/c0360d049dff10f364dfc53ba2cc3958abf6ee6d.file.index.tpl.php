<?php /* Smarty version Smarty-3.1.11, created on 2017-11-13 08:30:39
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9326965785a08f5bf472a34-82655525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1473137413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9326965785a08f5bf472a34-82655525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a08f5bf567017_39061868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a08f5bf567017_39061868')) {function content_5a08f5bf567017_39061868($_smarty_tpl) {?><!doctype html>
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
	
	<div class="alert-danger-login"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
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
</html><?php }} ?>