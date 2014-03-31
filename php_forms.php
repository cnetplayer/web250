<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
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
<section class="forms">
	<h1>FizzBuzz Form using GET</h1>
	<p>To play this FizzBuzz variation, enter an ending number. Once you click Submit, the game will count through your chosen number. Each time the number is divisible by 3, we'll show Masala. Each time the number is divisible by 5, we'll show Chai. Each time the number is divisible by both 3 and 5, we'll show Masala Chai.</p>
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Your Number: <input type="text" name="fbNumber">
	<br><br>
	<input type="submit" name="submit" value="Submit">
	</form>
<div id="fizzbuzz">
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["fbNumber"]))
{
	echo "<hr>";
	$theNumber = $_GET["fbNumber"];
	for ( $i = 1; $i <= $theNumber; $i++ ) {
    if ( ( $i % 3 ) == 0 && ( $i % 5 ) == 0 ) {
        echo $i.'. Masala Chai<br>';
    } else if ( ( $i % 5 ) == 0 ) {
        echo $i.'. Chai<br>';
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
<section class="forms">
	<h1> A Contact PHP Form calling Second Page using POST</h1>
	<p>This contact form will go to another page to show your input.</p>
	<form method="post" action="php_forms_output.php">
	First Name: <input type="text" name="firstname"> Last Name: <input type="text" name="lastname">
   <br><br>
   Email Address: <input type="email" name="email">
   <br><br>
   Password: <input type="password" name="password">
   <br><br>
   Your Gender:
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Male">Male
   <br><br>
   What about tea interests you?
   <input type="checkbox" name="interest[]" value="Health Benefits">Health Benefits
   <input type="checkbox" name="interest[]" value="Coffee Replacement">Coffee Replacement
   <input type="checkbox" name="interest[]" value="International Appeal">International Appeal
   <br><br>
   Tell me a little about your last cup of tea:<br>
   <textarea name="experience" cols="50" rows="5"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
	</form>
</section>
<section class="forms">
	<h1>A Contact PHP Form staying on same page using POST</h1>
	<p>This contact form will show your input just below the form once you click Submit.</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="firstname"> Last Name: <input type="text" name="lastname">
   <br><br>
   Email Address: <input type="email" name="email">
   <br><br>
   Password: <input type="password" name="password">
   <br><br>
   Your Gender:
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Male">Male
   <br><br>
   What about tea interests you?
   <input type="checkbox" name="interest[]" value="Health Benefits">Health Benefits
   <input type="checkbox" name="interest[]" value="Coffee Replacement">Coffee Replacement
   <input type="checkbox" name="interest[]" value="International Appeal">International Appeal
   <br><br>
   Tell me a little about your last cup of tea:<br>
   <textarea name="experience" cols="50" rows="5"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
	</form>
<div class="output">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	echo "<hr><h2>Your Information:</h2>";
	echo "<strong>Your Name:</strong> " . test_input($_POST["firstname"]) . " " . test_input($_POST["lastname"]) . "<br><strong>Your Email Address:</strong> " . test_input($_POST["email"]) . "<br><strong>Your Password:</strong> " . test_input($_POST["password"]) . "<br><strong>Your Gender:</strong> " . test_input($_POST["gender"]) . "<br>";
	$interest = $_POST['interest'];
	$N = count($interest);
 
    echo "<strong>You selected $N interest(s):</strong><br>";
    for($i=0; $i < $N; $i++)
    {
      echo $interest[$i] . "<br>";
	}
	echo "<strong>Your last tea experience:</strong> <br>" . test_input($_POST["experience"]);
}
?>
</div>
</section>
<section class="forms">
	<h1>A Contact PHP Form staying on same page using GET</h1>
	<p>This contact form will show your input just below the form once you click Submit.</p>
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="firstname"> Last Name: <input type="text" name="lastname">
   <br><br>
   Email Address: <input type="email" name="email">
   <br><br>
   Password: <input type="password" name="password">
   <br><br>
   Your Gender:
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Male">Male
   <br><br>
   What about tea interests you?
   <input type="checkbox" name="interest[]" value="Health Benefits">Health Benefits
   <input type="checkbox" name="interest[]" value="Coffee Replacement">Coffee Replacement
   <input type="checkbox" name="interest[]" value="International Appeal">International Appeal
   <br><br>
   Tell me a little about your last cup of tea:<br>
   <textarea name="experience" cols="50" rows="5"></textarea>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
	</form>
<div class="output">
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET["firstname"]))
{
	echo "<hr><h2>Your Information:</h2>";
	echo "<strong>Your Name:</strong> " . test_input($_GET["firstname"]) . " " . test_input($_GET["lastname"]) . "<br><strong>Your Email Address:</strong> " . test_input($_GET["email"]) . "<br><strong>Your Password:</strong> " . test_input($_GET["password"]) . "<br><strong>Your Gender:</strong> " . test_input($_GET["gender"]) . "<br>";
	$interest = $_GET['interest'];
	$N = count($interest);
 
    echo "<strong>You selected $N interest(s):</strong><br>";
    for($i=0; $i < $N; $i++)
    {
      echo $interest[$i] . "<br>";
	}
	echo "<strong>Your last tea experience:</strong> <br>" . test_input($_GET["experience"]);
}
?>
</div>
</section>
<!--END Content Area-->
</div>

<?php

include_once("_includes/footer.txt");

?>
