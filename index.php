<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title></title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.js"></script>
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    
	</head>
	<body> 
<!--         stating the login form -->
	<div class="login_form">
	<h3>Login</h3>
        <form method="POST" action="login.php">
	<label>Username</label>
	<input type="text" class="form-control input-sm" name="username" id="username" placeholder="your username" /><br />
	<label>Password</label>
	<input class="form-control input-sm" type="password" name="pasword" id="password" placeholder="your password" /><br />
        <br/>
	<input type="submit" id="submit_login" class="btn btn-primary btn-xs" name="submit" class="inputbutton grey" value="Login" />
	<span class="login_loading"></span>
	<span class="errormess"></span>
	</form>
<!--        End of login form -->
	
	</div>
	
	</body>
</html>