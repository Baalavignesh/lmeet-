<?php
include("../../config/config.php");

$interest = $_POST['interests'];
$maininterest = $_POST['maininterests'];
$name = $_POST['username'];
$interest = preg_replace('/\s+/','',$interest);

$update_token = mysqli_query($con, "UPDATE users SET token='2' WHERE username='$name'");
$query = mysqli_query($con, "UPDATE interests SET sub_interests='$interest',main_interests='$maininterest' WHERE username='$name'");
$interest_array =explode(",",$interest);

foreach($interest_array as $int) {

   $con->query( "UPDATE userinterest SET users = CONCAT(users, '$name,') WHERE interest = '$int'");
}


?>