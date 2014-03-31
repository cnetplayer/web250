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
<h1>Welcome to Chris' first PHP page!</h1>
<p>I'm taking this course to further my web design skills. I currently work as a web designer for a local ecommerce company which uses many third-party utilities. I hope to not only benefit my current company by learning to build more in-house, but also further my future in a web development career field.</p>
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
