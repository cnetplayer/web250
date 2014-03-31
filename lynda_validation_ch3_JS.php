<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="_scripts/modernizr_forms.js"></script>
</head>

<body>
<div id="page_wrapper">

<?php

include_once("_includes/header.txt");

?>

<div id="page_body">
<!--Content Area-->
	<section class="forms">
	<h1>Form Validation using JavaScript</h1>
	<p>Using the previous HTML5 validation techniques, I have added further validation using JavaScript and created this sample form for a tea party reservation.</p>
	<p>I have used:</p>
	<ul>
			<li>onfocus handler to assist with required fields</li>
			<li>onchange handler to verify pattern in phone field (using regular expression)</li>
			<li>onsubmit handler to verify required fields before form submission</li>
			<li>Modernizr to try to aid older browsers in using HTML5 functionality
			  <ul>
			    <li>So far, Google Chrome is handling everything the best. Still haven't worked out the number &amp; date fields polyfill yet, but I got the validation portion working, which was the point of this tutorial.			</li>
			  </ul>
			</li>
	  </ul>
	<p>Please note: This form will not result in any output as its purpose is to demonstrate validation of the various inputs.</p>
	<hr>
	<span id="errorHint" class="formErrorHint"></span><br><br>
		<form action="#" method="post" id="partyForm" name="partyForm"> 
			<label class="required">*First Name: <input required type="text" name="fname" id="fname" maxlength="10" placeholder="First Name"></label>
			<label class="required">*Last Name: <input required type="text" name="lname" id="lname" maxlength="15" placeholder="Last Name"></label>
			<br><br>
			<label class="required">*Email Address: <input required type="email" name="email" id="email" size="30" placeholder="Email Address"></label>
           <br><br>
           <label>Phone: <input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx" pattern="\d{3}[\-]\d{3}[\-]\d{4}" value=""></label><span id="phoneError" class="formErrorHint"></span>
			<br><br>
			<label class="required">*Number of Guests: 
					<input required name="guests" id="guests" type="number" placeholder="2" max="20" min="2"></label>
			<br><br>
          <label class="required">*Date for Party: 
					<input required name="date" id="date" type="datetime-local"></label>
			<br><br>
			<label>Special Occassion for Party? <input type="text" name="occassion" id="occassion" placeholder="Ex: Birthday" list="occassions" size="30"></label>
			<datalist id="occassions">
				<option value="Birthday">
				<option value="Anniversary">
			</datalist>
			<br><br>
			<label>Please Upload Completed Menu Selection Form (MS Word or PDF ONLY): <input type="file" name="file" id="file" accept="application/msword, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document" multiple></label>
		<br><br>
		<input type="submit" name="submit" id="submit" value="Submit"> 
		</form>
	</section>
<!--END Content Area-->
</div>
<script type="text/javascript" src="_scripts/lynda_validation.js"></script>
<?php

include_once("_includes/footer.txt");

?>
