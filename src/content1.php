<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Miller Assignment 4 part 1</title>
	<h1>Content 1</h1>
  </head>
  <body>
	<?php
	header('Content-Type: text/html');
	session_start();
	if(!isset($_POST['username']) && !isset($_SESSION['username'])){
		header("Location: login.php");
		exit;
	}
	if((isset($_POST['username']) && $_POST['username'] == null) && !isset($_SESSION['username'])){
		echo '<p> A username must be entered. Click <a href="login.php">here</a> to return to the login screen';
	} else{
		if(session_status() == PHP_SESSION_ACTIVE){
			if(!isset($_SESSION['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if(!isset($_SESSION['visits'])){
				$_SESSION['visits'] = 0;
			}
		}
		echo '<p>Hello ' . $_SESSION['username'] . ' you have visited this page ' . $_SESSION['visits'] . ' times before.';
		$_SESSION['visits']++;
		echo '<p>Click <a href="content2.php">here</a> to go to content2.';
		echo '<p>Click <a href="login.php?logout=true">here</a> to logout.';
	}
	?>
  </body>
</html>
