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
	<h1>Your Input</h1>
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
<p><a href="php_forms.php">Go Back to PHP Forms Page</a></p>
</section>
<!--END Content Area-->
</div>

<?php

include_once("_includes/footer.txt");

?>
