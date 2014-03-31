<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page_wrapper">

<?php
include_once("_includes/header.txt");
?>

<div id="page_body">
<!--Content Area-->
<section class="forms">
	<h1>FizzBuzzBang Form</h1>
	<h3 id="userNameGreeting">Let's have some tea together, but first I should know your name...<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="enterName">Your Name:</label>
			<input type="text" name="enterName" id="enterName" class="focus">
			<input type="submit" name="submit" value="Tell Me Who You Are">
</form>
	</h3>
	<p>In this variation, we will set a tea tasting calendar.<br>
    We want to build a number of consecutive days, on certain ones we will try a different type of tea.<br>
    We have started you with information to give you a one year 
    tasting calendar below.<br>Feel free to change the information to work for you.<br>
    At a minimum, let's try it for a week. So, at least choose 7 days to try your selections.
    </p>
	<form id="fizzInput" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><h3>Select FREQUENCY and TYPE OF TEA to try:</h3>
			<p>Every
		<select name="fizzDay">
				<option value="2">2</option>
				<option value="3" selected="selected">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
		</select>
    				days you will try a
		<select name="fizzMessage">
				<option value="Black Tea" selected="selected">Black Tea</option>
				<option value="Green Tea">Green Tea</option>
				<option value="Oolong Tea">Oolong Tea</option>
				<option value="White Tea">White Tea</option>
				<option value="Tisane (Herbal Infusion)">Tisane (Herbal Infusion)</option>
		</select>
		<br>
    				Every
		<select name="buzzDay">
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5" selected="selected">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
		</select>
    				days you will try a
		<select name="buzzMessage">
				<option value="Black Tea">Black Tea</option>
				<option value="Green Tea" selected="selected">Green Tea</option>
				<option value="Oolong Tea">Oolong Tea</option>
				<option value="White Tea">White Tea</option>
				<option value="Tisane (Herbal Infusion)">Tisane (Herbal Infusion)</option>
		</select>
		<br>
    				Every
		<select name="bangDay">
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7" selected="selected">7</option>
		</select>
    				days you will try a
		<select name="bangMessage">
				<option value="Black Tea">Black Tea</option>
				<option value="Green Tea">Green Tea</option>
				<option value="Oolong Tea">Oolong Tea</option>
				<option value="White Tea" selected="selected">White Tea</option>
				<option value="Tisane (Herbal Infusion)">Tisane (Herbal Infusion)</option>
		</select>
    	</p>
	<h3>Enter the "START" and "STOP" numbers here:</h3>
	<p>
	START Number: <input name="startNumber" type="text" value="1" size="5"><br>
	STOP Number: <input name="endNumber" type="text" value="365" size="5"><br><br>
	<input name="submit" type="submit" value="Let's Get Started">
	</form>
<div id="fizzbuzz">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "<hr>";
	$formStartNumber = $_POST["startNumber"];
	$formEndNumber = $_POST["endNumber"];
	$fizzDay = $_POST["fizzDay"];
	$fizzMessage = $_POST["fizzMessage"];
	$buzzDay = $_POST["buzzDay"];
	$buzzMessage = $_POST["buzzMessage"];
	$bangDay = $_POST["bangDay"];
	$bangMessage = $_POST["bangMessage"];
	for ( $i = $formStartNumber; $i <= $formEndNumber; $i++ ) {
    if ( ( $i % $fizzDay ) == 0 && ( $i % $buzzDay ) == 0  && ( i % $bangDay ) == 0) {
        echo $i.'.'.$_POST["bangMessage"].'<br>';
    } else if ( ( i % $bangDay ) == 0 ) {
        echo $i.'.'.$bangMessage.'<br>';
    } else if ( ( $i % 3 ) == 0 ) {
        echo $i.'. Masala<br>';
    } else {
        echo $i.'.<br>';
    } 
}
}
?>
</div>
</section>
<!--END Content Area-->
</div>

<?php
include_once("_includes/footer.txt");
?>
