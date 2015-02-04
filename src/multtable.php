<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>multtable</title>
</head>
<header></header>
<body>
<?php
error_reporting (E_ALL); 
ini_set('display_errors', 'On'); 

$minMultiplicand = $_GET['min-multiplicand'];
$maxMultiplicand = $_GET['max-multiplicand'];
$minMultiplier = $_GET['min-multiplier'];
$maxMultiplier = $_GET['max-multiplier'];
$isTrue = True;

if ((int) $minMultiplicand > (int) $maxMultiplicand){
	echo "<p> Minimum multiplicand larger than maximum </p>";
	$isTrue = False;
}
if ((int) $minMultiplier > (int) $maxMultiplier){
	echo "<p> Minimum multiplier larger than maximum </p>";
	$isTrue = False;
}
if ($minMultiplicand === NULL){
	echo "<p> Missing parameter min-multiplicand. </p>";
	$isTrue = False;
}
if ($maxMultiplicand === NULL){
	echo "<p> Missing parameter max-multiplicand. </p>";
	$isTrue = False;
}
if ($minMultiplier === NULL){
	echo "<p> Missing parameter min-multiplier. </p>";
	$isTrue = False;
}
if ($maxMultiplier === NULL){
	echo "<p> Missing parameter max-multiplier. </p>";
	$isTrue = False;
}
if ((int) $minMultiplicand == 0){
	echo "<p> min-multiplicand must be an integer. </p>";
	$isTrue = False;
}
if ((int) $maxMultiplicand == 0){
	echo "<p> max-multiplicand must be an integer. </p>";
	$isTrue = False;
}
if ((int) $minMultiplier == 0){
	echo "<p> min-multiplier must be an integer. </p>";
	$isTrue = False;
}
if ((int) $maxMultiplier == 0){
	echo "<p> max-multiplier must be an integer. </p>";
	$isTrue = False;
}
if ($isTrue == True){
	echo '<p>Multiplication Table</p>
	<table border="1"><td>';
	for($j = 0; $j < ($maxMultiplier - $minMultiplier + 1); $j++){
		echo '<td>' . ($minMultiplier + $j);	
	}
	for($i = 0; $i < ($maxMultiplicand - $minMultiplicand + 1); $i++){
		echo '<tr><td>' . ($minMultiplicand + $i);
		for($j = 0; $j < ($maxMultiplier - $minMultiplier + 1); $j++){
			echo '<td>' . (($minMultiplicand + $i) * ($minMultiplier + $j));
		}
		
	}
}
else echo "<p>Try again";
echo '</table>';
echo '</body>';
echo '</html>';
?>
