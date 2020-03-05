<?php 
include("includes/header.php");

 ?>
<?php
	$user_data_query = mysqli_query($con, "SELECT sub_interests, main_interests,latitude,longitude FROM interests WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$sub_interests = $row['sub_interests'];
	$main_interests = $row['main_interests'];
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];


	?>
<?php
    $sub_interests_explode = explode(",", $sub_interests);
  //  echo 'Your intersts :' . $sub_interests_explode[0];
  
  ?>
  <?php
    foreach($sub_interests_explode as $value) 
  {
  
  
            //echo $value;
            
            //echo '<br>';
?>
            <a href="interestdisp.php?email=<?php echo $value ?>">
            <?php
                echo $value;
            ?>
         </a>

         <?php
      }
      ?>
    
     
     
