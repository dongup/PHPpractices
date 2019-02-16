
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL;?>public/css/default.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php Session::init(); ?>
	<div id="header">
		<h1>Welcome</h1>
		<br>
		<div class="topnav">
			<a class="tablinks" onclick="actived()" href="<?php echo URL;?>index">Bảng tin</a> 
			<?php if(Session::get('loggedIn')==true ): ?>
				<a class="tablinks" onclick="actived()" href="<?php echo URL;?>subscribe">Tham gia sk</a> 
				<a class="tablinks" onclick="actived()" href="<?php echo URL;?>subscribe/logout">Đăng xuất</a> 
			<?php else: ?>
				<a class="tablinks" onclick="actived()" href="<?php echo URL;?>login">Đăng nhập</a> 
			<?php endif ?>
			<a class="tablinks" onclick="actived()" href="<?php echo URL;?>help">Trợ giúp</a>
		</div>
		<hr>
	</div>	
	<div id="content">