<?php
include("../../config/config.php");

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$name=$_POST['username'];


//$update_token = mysqli_query($con, "UPDATE users SET token='2' WHERE username='$name'");
//$query = mysqli_query($con, "INSERT INTO interests VALUES ('','$name', '$interest' , '$maininterest')");
//$query = mysqli_query($con, "UPDATE users SET latitude='$latitude',longitude='$longitude' WHERE username='$name'");
$query = mysqli_query($con, "UPDATE interests SET latitude='$latitude',longitude='$longitude' WHERE username='$name'");




?>