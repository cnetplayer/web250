<?php
session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>WEB250 Course Contract</title>
<link href="_styles/contract.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="pageBody">

<header>
<h1>Chris Willis WEB250 Course Contract</h1>
</header>

<div id="content">
<p>
I, Chris Willis agree to abide by the terms of the course contract in my Spring 2014 WEB250-85 Database Driven Websites with my instructor, D.I. von Briesen.
</p>

<p>
I understand that all work that I do on my school and personal website will be publicly available to the world, and will not put information there that is inappropriate for schoolwork, or that I wish to keep private.
</p>

<p>
I also understand that it is my work that counts for attendance, not logins or showing up for class. As such, failure to turn in assignments may show as absences.
</p>
</div>

<div id="signature">
<p>
Signed:<br>Christopher Willis<br>January 13, 2014
</p>
</div>

<footer>
<a href="http://validator.w3.org/check?uri=referer"> <img src="../_images/valid_html5.gif"  alt="Valid HTML 5" height="31" width="88" style="border:0px;" /> </a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"> <img src="../_images/valid-css.png" alt="Valid CSS!" height="31" width="88" style="border:0px;" /> </a>
<p>
<?php
echo "You have viewed this page " . $_SESSION['views'] . " times in this session!";
?>
</p>
<p>Refresh the page to increase the pageview counter.
<br>Close the browser and reopen to reset the counter.
</p>
</footer>

</div>

</body>
</html>