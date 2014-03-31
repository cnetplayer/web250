<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
// define variables and set to empty values
$fname = $lname = $gender = $tea = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $fname = test_input($_POST["fname"]);
   $lname = test_input($_POST["lname"]);
   $tea = test_input($_POST["tea"]);
   $gender = test_input($_POST["gender"]);
}

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<div id="page_wrapper">

<?php

include_once("_includes/header.txt");

?>

<div id="page_body">
<!--Content Area-->
	<h1>A Simple PHP Form</h1>
	<p>To demonstrate using PHP to collect and output form data,
	<br>
	let's have you complete a simple form to tell me about you &amp; your last cup of  tea.</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="fname">
   <br><br>
   Last Name: <input type="text" name="lname">
   <br><br>
   The last tea you enjoyed was: <input type="text" name="tea">
   <br><br>
   Your Gender:
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Male">Male
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
	</form>
<hr>
	<?php
	echo "<h2>Your Input:</h2>";
	echo $fname . " " . $lname;
	echo "<br>";
	echo $tea;
	echo "<br>";
	echo $gender;
	?>
<!--END Content Area-->
</div>

<?php

include_once("_includes/footer.txt");

?>
