<?php
include '_includes/connection.php';
$id=$_REQUEST['id'];
//this query will select the user data which is to be used to fill up the form
$selectForUpdate=mysqli_query($connection,"SELECT * FROM crud_survey WHERE cs_id='$id'") or die(mysqli_error($connection));
$num=mysqli_num_rows($selectForUpdate);
//just a little validation, if a record was found, the form will be shown
//it means that there's an information to be edited
if($num>0){
$row=mysqli_fetch_assoc($selectForUpdate);
extract($row);
?>
<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="update_record">
    <h3>Edit Your Information</h3>
    <p>This information was last updated:<br><?php echo $modified; ?></p>
    <form method="post" action="crud.php"> 
    <label for="firstname">First Name: </label>
    <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" required>
    <br><br>
    <label for="lastname">Last Name: </label>
    <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" required>
    <br><br>
    <label for="beverage">Your Favorite Morning Beverage: </label>
    <input type="text" name="beverage" id="beverage" value="<?php echo $beverage; ?>" required>
    <br><br>
    <input type='hidden' name='id' value='<?php echo $id; ?>'>
    <div id="update_buttons">
    <input type="submit" name="edit" value="Save Changes" id="edit" onClick="parent.$.fancybox.close();">
    <input type="button" name="close" value="Cancel Without Changes" id="close" onClick="parent.$.fancybox.close();">
    </div>
    </form>
    </div>
<?php
}
?>
</body>
</html>