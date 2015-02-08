<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Miller Assignment 4 part 1</title>
    <h1>Login</h1>
  </head>
  <body>
	<?php
	session_start();
	if(isset($_GET['logout'])){
		$_SESSION = array();
		session_destroy();
	}
	echo '<form method="post" action="content1.php">Username<br><input type="text" name="username"><input type="submit" value="Login">';
	?>
  </body>
</html>
