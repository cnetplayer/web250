<?php
session_start();
if (($_SERVER["REQUEST_METHOD"] == "GET") && ($_GET['enterName'] !== ""))
{
$_SESSION['enterName'] = $_GET['enterName'];
}
?>
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
	<h3>
	<?php
		echo "Welcome " . $_SESSION['enterName'] . "! Let's build you a tea tasting schedule.";
	?>
	</h3>
	<p>If this isn't your name, <a href="fizzbuzzbang1a.php">go back</a> and tell me who you are.</p>
	<hr>
	<p>In this variation, we will set a tea tasting calendar.<br>
    We want to build a number of consecutive days, on certain ones we will try a different type of tea.<br>
    At a minimum, let's try it for a week. So, at least choose 7 days to try your selections.
    </p>
	<form id="fizzInput" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>Select TYPE OF TEA to try:</h3>
		<p>
		<label for="fizzMessage">Every 3 days you will try a</label>
		<select id="fizzMessage" name="fizzMessage">
				<option value="Black Tea" <?php if ($_POST['fizzMessage'] == 'Black Tea') { ?>selected="true" <?php }; ?>>Black Tea</option>
				<option value="Green Tea" <?php if ($_POST['fizzMessage'] == 'Green Tea') { ?>selected="true" <?php }; ?>>Green Tea</option>
				<option value="Oolong Tea" <?php if ($_POST['fizzMessage'] == 'Oolong Tea') { ?>selected="true" <?php }; ?>>Oolong Tea</option>
				<option value="White Tea" <?php if ($_POST['fizzMessage'] == 'White Tea') { ?>selected="true" <?php }; ?>>White Tea</option>
				<option value="Tisane (Herbal Infusion)" <?php if ($_POST['fizzMessage'] == 'Tisane (Herbal Infusion)') { ?>selected="true" <?php }; ?>>Tisane (Herbal Infusion)</option>
		</select>
		<br>
		<label for="buzzMessage">Every 5 days you will try a</label>
		<select id="buzzMessage" name="buzzMessage">
				<option value="Black Tea" <?php if ($_POST['buzzMessage'] == 'Black Tea') { ?>selected="true" <?php }; ?>>Black Tea</option>
				<option value="Green Tea" <?php if ($_POST['buzzMessage'] == 'Green Tea') { ?>selected="true" <?php }; ?>>Green Tea</option>
				<option value="Oolong Tea" <?php if ($_POST['buzzMessage'] == 'Oolong Tea') { ?>selected="true" <?php }; ?>>Oolong Tea</option>
				<option value="White Tea" <?php if ($_POST['buzzMessage'] == 'White Tea') { ?>selected="true" <?php }; ?>>White Tea</option>
				<option value="Tisane (Herbal Infusion)" <?php if ($_POST['buzzMessage'] == 'Tisane (Herbal Infusion)') { ?>selected="true" <?php }; ?>>Tisane (Herbal Infusion)</option>
		</select>
		<br>
		<label for="bangMessage">Every 7 days you will try a</label>
		<select id="bangMessage" name="bangMessage">
				<option value="Black Tea" <?php if ($_POST['bangMessage'] == 'Black Tea') { ?>selected="true" <?php }; ?>>Black Tea</option>
				<option value="Green Tea" <?php if ($_POST['bangMessage'] == 'Green Tea') { ?>selected="true" <?php }; ?>>Green Tea</option>
				<option value="Oolong Tea" <?php if ($_POST['bangMessage'] == 'Oolong Tea') { ?>selected="true" <?php }; ?>>Oolong Tea</option>
				<option value="White Tea" <?php if ($_POST['bangMessage'] == 'White Tea') { ?>selected="true" <?php }; ?>>White Tea</option>
				<option value="Tisane (Herbal Infusion)" <?php if ($_POST['bangMessage'] == 'Tisane (Herbal Infusion)') { ?>selected="true" <?php }; ?>>Tisane (Herbal Infusion)</option>
		</select>
    	</p>
	<h3>Enter the "STOP" number here:</h3>
	<p>
	<label for="endNumber">STOP Number: </label><input name="endNumber" type="text" value="<?php echo isset($_POST['endNumber']) ? $_POST['endNumber'] : '' ?>"><br><br>
	<input id="endNumber" name="submitFizz" type="submit" value="Let's Get Started">
	</p>
	</form>
<div id="fizzbuzz">
<?php
if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST['submitFizz']))
{
	echo "<hr>";
	$formEndNumber = trim($_POST["endNumber"]);
	$fizzDay = 3;
	$fizzMessage = "-<b>".$_POST["fizzMessage"]."</b>-";
	$buzzDay = 5;
	$buzzMessage = "-<b>".$_POST["buzzMessage"]."</b>-";
	$bangDay = 7;
	$bangMessage = "-<b>".$_POST["bangMessage"]."</b>-";
	
	if ((is_nan($formEndNumber)) || ($formEndNumber < 7) || is_null($formEndNumber)) {
		echo "<div id=\"errorMessage\"><p><strong>I'm sorry, something you entered didn't work.</strong><br>Remember these guidelines:</p><ul><li>The &quot;stop number&quot; should be 7 or greater</li><li>No letters or special characters</li><li>Do not use negative numbers</li></ul><p><strong>Please Try Again!</strong></p></div>";
	} else {
		for ( $i = 1; $i <= $formEndNumber; $i++ )
		{
		$resultingMessage = "";
		
		if ( $i % $fizzDay == 0 )
		{
		$resultingMessage .= $fizzMessage;
		}
		if ( $i % $buzzDay == 0 )
		{
		$resultingMessage .= $buzzMessage;
		}
		if ( $i % $bangDay == 0 ) 
		{
		$resultingMessage .= $bangMessage;
		}
		echo "<p>" . $i . ")" . $resultingMessage . "</p>";
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
