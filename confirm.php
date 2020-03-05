<?php
    function red()
    {
        header("Location: register.php");
        exit();
    }
 //   if(isset($_GET['email']) || isset($GET['token']))
  //  {
  //     // red();
  //  }
  //  else 
    {
        $con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

            if(mysqli_connect_errno()) 
            {
                echo "Failed to connect: " . mysqli_connect_errno();
            }
        $email = $con ->real_escape_string($_GET['email']);
        $token = $con -> real_escape_string($_GET['token']);
//$check_username_query = mysqli_query($con, "SELECT token FROM users WHERE email='$em' AND token='$token'");
//$sql = $con->query(query: "SELECT token FROM users WHERE email='$em' AND token='$token'");
        
	$username_query = mysqli_query($con, "SELECT username FROM users WHERE  email='$email' AND token='$token' AND isEmailConfirmed=0");
	$row = mysqli_fetch_array($username_query);
    $username = $row['username'];
    
    $query = mysqli_query($con, "INSERT INTO interests VALUES ('', '$username', '', '','','')");
            //--
        $sql = mysqli_query($con, "SELECT token FROM users WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");
        $num_rows = mysqli_num_rows($sql);
        if($num_rows>0)
        {
            $con->query( "UPDATE users SET isEmailConfirmed=1");
            $con->query("UPDATE users SET token=1");
            red();
        }
        //$num_rows = mysqli_num_rows($e_check);

		//	if($num_rows > 0) {
		//		array_push($error_array, "Email already in use<br>");
		//	}
    }
?>