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
	<h1>Form Validation using HTML5</h1>
	<p>Using HTML5 validation techniques, I have created this sample form for a tea party reservation.</p>
	<p>I have used:</p>
	<ul>
			<li>Input type attributes: text, email, datetime-local, number, tel, and file</li>
			<li>Placeholder Text attribute</li>
			<li>Required attribute</li>
			<li>Min, Max and Maxlength attributes</li>
			<li>Pattern attribute (on phone field)</li>
			<li>Restricted MIME type accept attribute (on file upload field)</li>
			<li>Multiple attribute (on file upload field)</li>
			<li>Datalist attribute (on special occassion field)</li>
	</ul>
	<p>Please note: This form will not result in any output as its purpose is to demonstrate validation of the various inputs.</p>
	<hr>
		<form method="post" action="#"> 
			<label class="required">*First Name: <input type="text" name="fname" required maxlength="10" placeholder="First Name"></label>
			<label class="required">*Last Name: <input type="text" name="lname" required maxlength="15" placeholder="Last Name"></label>
			<br><br>
			<label class="required">*Email Address: <input type="email" name="email" size="30" required placeholder="Email Address"></label>
			<label>Phone: <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" pattern="\d{3}[\-]\d{3}[\-]\d{4}"></label>
			<br><br>
			<label class="required">*Number of Guests: 
					<input name="guests" type="number" required placeholder="2" max="20" min="2"></label>
			<label class="required">*Date for Party: 
					<input name="date" type="datetime-local" required></label>
			<br><br>
			<label>Special Occassion for Party? <input type="text" name="occassion" placeholder="Ex: Birthday" list="occassions" size="30"></label>
			<datalist id="occassions">
				<option value="Birthday">
				<option value="Anniversary">
			</datalist>
			<br><br>
			<label>Please Upload Completed Menu Selection Form (MS Word or PDF ONLY): <input type="file" accept="application/msword, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document" multiple></label>
		<br><br>
		<input type="submit" name="submit" value="Submit"> 
		</form>
	</section>
<!--END Content Area-->
</div>

<?php

include_once("_includes/footer.txt");

?>
