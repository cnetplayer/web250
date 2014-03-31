<?php
$formRequestMethod = $_SERVER['REQUEST_METHOD'] == 'POST';
$name = ($formRequestMethod) ? $_POST["name"] : "tea lover";
$message = array("Black Tea", "Green Tea", "Oolong Tea", "White Tea", "Tisane (Herbal Infusion)");
$dayNumber = array(2, 3, 4, 5, 6, 7);

$startNumber = ($formRequestMethod) ? trim($_POST["startNumber"]) : 1;
$endNumber = ($formRequestMethod) ? trim($_POST["endNumber"]) : 7;

$fizzDay = ($formRequestMethod) ? $_POST["fizzDay"] : $dayNumber[1];
$buzzDay = ($formRequestMethod) ? $_POST["buzzDay"] : $dayNumber[3];
$bangDay = ($formRequestMethod) ? $_POST["bangDay"] : $dayNumber[5];

$fizzMessage = ($formRequestMethod) ? $_POST["fizzMessage"] : $message[0];
$buzzMessage = ($formRequestMethod) ? $_POST["buzzMessage"] : $message[1];
$bangMessage = ($formRequestMethod) ? $_POST["bangMessage"] : $message[2];

function dayNumberOption($dayNumber, $setDay) {
	foreach ($dayNumber as $option) {
		echo "<option value='$option'";
		if ($setDay == $option) { 
			echo " selected";
		}
		echo ">$option</option>\n";
	}
}

function messageOption($message, $setMessage) {
	foreach ($message as $option) {
		echo "<option value='$option'";
		if ($setMessage == $option) {
			echo " selected";
		}
		echo ">$option</option>\n";
	}
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
include_once "_includes/header.txt";
?>

<div id="page_body">
<!--Content Area-->
<section class="forms">
	<h1>FizzBuzzWhatever Form</h1>
	<h3>
	<?php
		echo "Welcome $name! Let's build you a tea tasting schedule.";
	?>
	</h3>
	<hr>
	<p>In this variation, we will set a tea tasting calendar.<br>
    We want to build a number of consecutive days, on certain ones we will try a different type of tea.<br>
    We have started you with information to give you a one week 
    tasting calendar below. Make changes to suit your preferences.<br>
    At a minimum, let's try it for a week. So, at least choose a span of 7 days to try your selections.
    </p>
	<form id="fizzInput" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<h3>Let's make this just for you!</h3>
	<p>What's your name: <input type="text" name="name" value="<?php echo $name; ?>"></p>
    <h3>Select FREQUENCY and TYPE OF TEA to try:</h3>
		<p>Every
		<select name="fizzDay" id="fizzDay">
		<?php
			echo dayNumberOption($dayNumber, $fizzDay);
		?>
		</select>
    	days you will try a
		<select id="fizzMessage" name="fizzMessage">
       <?php
			echo messageOption($message, $fizzMessage);
		?>
		</select>
		<br>
    	Every
		<select name="buzzDay" id="buzzDay">
		<?php
			echo dayNumberOption($dayNumber, $buzzDay);
		?>
		</select>
    	days you will try a
		<select id="buzzMessage" name="buzzMessage">
		<?php
			echo messageOption($message, $buzzMessage);
		?>
		</select>
		<br>
    	Every
		<select name="bangDay" id="bangDay">
		<?php
			echo dayNumberOption($dayNumber, $bangDay);
		?>
		</select>
    	days you will try a
		<select id="bangMessage" name="bangMessage">
		<?php
			echo messageOption($message, $bangMessage);
		?>
		</select>
    	</p>
	<h3>Enter the&quot;START&quot; and "STOP" numbers here:</h3>
	<p>
	START Number: <input name="startNumber" type="number" required value="<?php echo $startNumber; ?>"><br><br>
	STOP Number: <input name="endNumber" type="number" required value="<?php echo $endNumber; ?>"><br><br>
	<input id="endNumber" name="submitFizz" type="submit" value="Let's Get Started">
	</p>
	</form>
<div id="fizzbuzz">
<?php
if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST['submitFizz']))
{
	echo "<hr>";
	
	if ((is_nan($endNumber)) || (is_nan($startNumber)) || ($endNumber < $startNumber + 6) 
		|| ($startNumber < 1) || ($startNumber > $endNumber) || (is_null($endNumber)) 
		|| (is_null($startNumber)))
	{
		echo "<div id='errorMessage'>
		<p><strong>I'm sorry $name, something you entered didn't work.</strong><br>Remember these guidelines:</p>
		<ul>
		<li>The &quot;stop number&quot; should be 7 or greater than the &quot;start number&quot;</li>
		<li>The &quot;start number&quot; should be 1 or greater (Not zero)</li><li>No letters or special characters</li>
		<li>Do not use negative numbers</li>
		</ul>
		<p><strong>Please Try Again!</strong></p>
		</div>";
	} else {
		echo "<h2>A personalized tea tasting calendar for $name.</h2>";
		
		for ( $i = $startNumber; $i <= $endNumber; $i++ )
		{
		$resultingMessage = "";
		
		if ( $i % $fizzDay == 0 )
		{
		$resultingMessage .= "-<b>$fizzMessage</b>-";
		}
		if ( $i % $buzzDay == 0 )
		{
		$resultingMessage .= "-<b>$buzzMessage</b>-";
		}
		if ( $i % $bangDay == 0 ) 
		{
		$resultingMessage .= "-<b>$bangMessage</b>-";
		}
		echo "<p>Day $i) $resultingMessage</p>";
		}
	}
}
?>
</div>
</section>
<!--END Content Area-->
</div>

<?php
include_once "_includes/footer.txt";
?>