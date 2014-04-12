<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>

<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8">

<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-cookies.js" type="text/javascript"></script>
<script src="js/jquery-base64.js" type="text/javascript"></script>
<?php include('js/header-js.php'); ?>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/backstretch.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js" ></script>

<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="img/favicon.ico">

<title><?php echo global_title . ' - ' . global_organization; ?></title>

</head>

<body>

<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>

<div id="header_div"><?php include('header.php'); ?></div>

<h1><?php echo global_title; ?></h1>
<h2><?php echo global_organization; ?></h2>

<div class="box_div" id="login_div">
<div class="search_box_body_div">
<form action="." id="new_user_form"><p>

<table>

<tr>
	<td><input type="text" id="user_name_input" class="large_text" placeholder="Game type, ex: badminton"></td>
	<td><input type="text" id="user_email_input" class="large_text" placeholder="Location" autocapitalize="off"></td>
	<td><input type="submit" value="Search"></td>
</tr>
</table>
</form>
<hr class="blue_hr thick_hr" />
<?php echo list_users(); ?>
</div>
</div>

<div id="content_div"></div>

<div id="preload_div">
<img src="img/loading.gif" alt="Loading">
</div>

</body>

</html>
