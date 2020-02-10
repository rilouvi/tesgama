<?php
	
	//session_start();
	
	/* 
		ini adalah file index yang berisi fitur login
	
	*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Progress - Bussiness Company</title>
<link rel="stylesheet" type="text/css" href="<?= base_url("css/login.css"); ?>" media="screen" />
<style>
	
	.hide{ color:#FF0000; /*display:none !important; visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<!--Ditambah pada Form Valid by Rio-->
				<form action="<?= base_url('Login/login'); ?>" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" class="ok">Login</button>
				</form>
			</div>
			<div class="footer">&raquo; <a href="">http://yourpage.com</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
