<?php

    class distance{
        private $user;
        private $con;

        public function __construct($con, $user){
            $this->con = $con;
            $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user'");
            $this->user = mysqli_fetch_array($user_details_query);
        }

        public function distancel($username_to_check){
            //
            function distancep($lat1, $lon1, $lat2, $lon2, $unit) {

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
            //
            $user_data_query = mysqli_query($this->con, "SELECT latitude,longitude FROM interests WHERE username='$username_to_check'");
           
            $row = mysqli_fetch_array($user_data_query);
            $latitude = $row['latitude'];
            $longitude = $row['longitude'];
          //      echo $latitude;
          //  echo $longitude;
          //  echo 'hello';
            //
            $value =  $this->user['username'];
            $user_data_query = mysqli_query($this ->con, "SELECT latitude,longitude FROM interests WHERE username='$value'");
                  $row = mysqli_fetch_array($user_data_query);
                  $latitude1 = $row['latitude'];
                  $longitude1 = $row['longitude'];
             //     echo $latitude1;
           // echo $longitude1;
           // echo $value;

                  return distancep($latitude, $longitude, $latitude1, $longitude1, "M");
        }
    }
    
?>