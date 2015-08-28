
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Ajax login </title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.js"></script>
	</head>
	<body>
	<div class="login_form">
	<h3>Private Area</h3>
<?php
session_start(); 
//session starting 

if (!isset($_SESSION['login_user']))// check the return value is equal or not
  {   
    // if the statement is true print 
echo 'You are not logged. <a href="index.php">login</a>'; 

} 
else 
{
    // if the return value is false print
echo 'Hi '.$_SESSION['login_user'].'. You are logged. <a href="logout.php">logout</a>';
}
?>
</body>
</html>