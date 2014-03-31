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
<h1>FizzBuzz Variation 1</h1>
<p>I have taken my original FizzBuzz and made the numbers and messages accessed through variables.</p>
<p>This version will count to 30 and  print &quot;Masala&quot; each time the number is divisible by 3, &quot;Chai&quot; when the number is divisible by 5, and &quot;Masala Chai&quot; when the number is divisible by both 3 and 5.</p>
<hr>
<div id='fizzbuzz'>
<?php
$fizzNumber = 3;
$buzzNumber = 5;
$fizzMessage = "Masala";
$buzzMessage = "Chai";
for ( $i = 1; $i <= 30; $i++ ) {
    if ( ( $i % $fizzNumber ) == 0 && ( $i % $buzzNumber ) == 0 ) {
        echo $i.'. '.$fizzMessage.' '.$buzzMessage.'<br>';
    } else if ( ( $i % $buzzNumber ) == 0 ) {
        echo $i.'. '.$buzzMessage.'<br>';
    } else if ( ( $i % $fizzNumber ) == 0 ) {
        echo $i.'. '.$fizzMessage.'<br>';
    } else {
        echo $i.'.<br>';
    } 
}
?>
</div>
<!--END Content Area-->
</div>
<?php
include_once("_includes/footer.txt");
?>
