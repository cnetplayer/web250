<?php
include '_includes/connection.php';
//check if an action was set, we use GET this time since we get the action data from the url
isset($_GET['action']) ? $action=$_GET['action'] : $action="";
if($action=='delete'){ //if the user clicked ok, run our delete query
$id=$_REQUEST['id'];
$delete = mysqli_query($connection, "DELETE FROM crud_survey WHERE cs_id='$id'") or die(mysqli_error($connection));
}
if(isset($_REQUEST['edit'])){
extract($_REQUEST);
//update the record if the form was submitted
$update = mysqli_query($connection,"UPDATE crud_survey SET firstname='$firstname', lastname='$lastname', beverage='$beverage' WHERE cs_id='$id'") or die(mysql_error($connection));
echo "<body onLoad='parent.window.location.reload(true);'>";
}
?>
<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
<link href="_scripts/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css">
<script src="_scripts/jquery-1.11.0.js"></script>
<script src="_scripts/jquery-migrate-1.2.1.js"></script>
<script src="_scripts/fancybox/jquery.fancybox-1.3.4.min.js"></script>
<script src="_scripts/jquery.easing.1.3.js"></script>
<script src="_scripts/crud.js"></script>
</head>

<body>

<div id="page_wrapper">

<?php
include_once("_includes/header.txt");
?>

<div id="page_body">
<!--Content Area-->
<h1>A Simple PHP CRUD Application</h1>
<p>The following application will take a bit of information from the user. Add that information to the database and then display it. You may also edit or delete a record in the database by choosing the appropriate link.</p>
<hr>
  <div class="newrecord_position">
  <div id="new_record">
  <p id="open">Add A New Record</p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <label for="firstname">First Name: </label>
  <input type="text" name="firstname" id="firstname" required>
  <br><br>
  <label for="lastname">Last Name: </label>
  <input type="text" name="lastname" id="lastname" required>
  <br><br>
  <label for="beverage">Your Favorite Morning Beverage: </label>
  <input type="text" name="beverage" id="beverage" required>
  <br><br>
  <input type="submit" id="save" name="save" value="Save"> 
  </form>
  </div>
  </div>
<?php
if(isset($_POST['save'])){
  //extract form information from new record save
  extract($_REQUEST);
  $insert = mysqli_query($connection,"INSERT INTO crud_survey SET firstname='$firstname', lastname='$lastname', beverage='$beverage'") or die(mysqli_error($connection));
}
$read = mysqli_query($connection, "SELECT * FROM crud_survey") or die(mysqli_error($connection));
//read query to the database
if($read){
//if successful query
//count how many records found
$num=mysqli_num_rows($read);
//check if more than 0 record found
if($num>0){
?>
<div>
<?php
//  if(isset($delete)){
//  //this will be displayed when the query was successful
//  echo "<div class='record_message'><h2>Record was deleted.</h2></div>";
//  }
//  if(isset($update)){
//  //this will be displayed when the query was successful
//  echo "<div class='record_message'><h2>Record was edited.</h2></div>";
//  }
?>
<table id="crud_table">
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Morning Beverage</th>
	<th>Edit</th>
   	<th>Delete</th>
	</tr>
<?php
//retrieve our table contents
while($row=mysqli_fetch_array($read)){
//this will turn $row['firstname'] into just $firstname
extract($row);
//creating new table row per record
?>
	<tr>
	<td><?php echo $firstname; ?></td>
	<td><?php echo $lastname; ?></td>
	<td><?php echo $beverage; ?></td>
	<td><a href="crud_edit.php?id=<?php echo $cs_id; ?>" title="Edit Record" class="iframe">Edit</a></td>
   	<td><a href='#' onClick='delete_user( <?php echo $cs_id; ?> );'>Delete</a></td>
	</tr>
<?php
}
?>
	<tr id="last_row">
   	<td colspan="5">Showing 1 to <?php echo $num; ?> of <?php echo $num; ?> entries</td>
   	</tr>
</table>
</div>
<?php
//if no records are found
}else{
echo "No records found.";
}
}
?>
<!--END Content Area-->
</div>

<?php

include_once("_includes/footer.txt");

?>
