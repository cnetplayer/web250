<?php
session_start();
$_SESSION['enterName'] = "fellow tea lover";
?>
<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="getName()">
<div id="page_wrapper">

<?php
include_once("_includes/header.txt");
?>

<div id="page_body">
<!--Content Area-->
<section class="forms">
	<h1>FizzBuzzBang Form Greeting</h1>
	<h3>Let's have some tea together, but first I should know your name...</h3>
		<form id="greetingInput" method="get" action="fizzbuzzbang1b.php">
			<label>Your Name: <input type="text" name="enterName"></label>
			<input type="submit" name="submitName" value="Tell Me Who You Are">
		</form>
</section>
<!--END Content Area-->
</div>

<?php
include_once("_includes/footer.txt");
?>
