<?php
   
   include("includes/header.php");
    {
        $con = mysqli_connect("localhost", "root", "", "social"); //Connection variable
        $interest = $con ->real_escape_string($_GET['email']);
       // $token = $con -> real_escape_string($_GET['token']);
        //echo $interest;

        $user_data_query = mysqli_query($con, "SELECT users FROM userinterest WHERE interest='$interest'");
	$row = mysqli_fetch_array($user_data_query);

    $users = $row['users'];
    $users_explode = explode(",", $users);
    ?>

    <?php
    //dist fn
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);
        
        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
        }
    //--
    foreach($users_explode as $value) 
  {
  
  
            //echo $value;
            
            //echo '<br>';
?>
    <?php
            echo " <a href='$value'>";  ?>
            
            <?php
                echo $value;
                  $user_data_query = mysqli_query($con, "SELECT latitude,longitude FROM interests WHERE username='$value'");
                  $row = mysqli_fetch_array($user_data_query);
                  $latitude = $row['latitude'];
                  $longitude = $row['longitude'];
                  //echo '    ';
                  //echo $latitude;
                  //echo ' ';
                  //echo $longitude;
                  //--
                  $user_data_query = mysqli_query($con, "SELECT latitude,longitude FROM interests WHERE username='$userLoggedIn'");
                  $row = mysqli_fetch_array($user_data_query);
                  $latitude1 = $row['latitude'];
                  $longitude1 = $row['longitude'];
                  //echo '    ';
                  //echo $latitude1;
                  //echo ' ';
                  //echo $longitude1;

                  echo '                     ( ';
                $distance = distance($latitude, $longitude, $latitude1, $longitude1, "M") . " )";
                echo $distance;
                echo '<br>';
                //!==================
                //2d array to sort======
                //!====================
                $latt = array("$value" , "$latitude");
                $latt[0][0] = "$value";
                $lat[0][1] = "$latitude1"  ;
                

                echo $latt[0][0].":: "; 
                echo $latt[0][2]."".".<br>";
             //   (
               //     array("$value","$distance"),
               // );
            ?>
         </a>
                
         <?php
        
      }
    
     // echo $latt[0][0].":: ".$latt[0][1]."".".<br>";


   }
    
   ?>