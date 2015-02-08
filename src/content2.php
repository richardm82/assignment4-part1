<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Richard Miller Assignment 4 part 1</title>
	<h1>Content 2</h1>
   </head>
  <body>
  </body>
</html>
<?php
header('Content-Type: text/html');
session_start();
if(!isset($_POST['username']) && !isset($_SESSION['username'])){
	header("Location: login.php");
	exit;
}
if((isset($_POST['username']) && $_POST['username'] == null) && !isset($_SESSION['username'])){
	echo '<p> A username must be entered. Click <a href="login.php">here</a> to return to the login screen';
} else {
	echo '<p>Click <a href="content1.php">here</a> to go back to content1.';
}
?>
