<?php
    require 'config/config.php';
    require 'includes/form_handlers/register_handler1.php'; 
    require 'includes/form_handlers/login_handler.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to LMeet</title>
    <link rel="stylesheet" type="text/css" href="loginpagestyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>
    <style>
    
@import url('https://fonts.googleapis.com/css?family=Mukta');

    
    </style>
</head>
<body>
     


  	<div class="login-reg-panel">
		<div class="login-info-box">
			<h1>Welcome back!!!!!</h1>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
            <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h1>Don't have an account?</h1>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
                <h1 id="loginheading">LOGIN</h1>
            <form action="loginpage.php" method="POST">
				<input type="email" name="log_email"  placeholder="Email"  value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
                <input type="password" placeholder="Password" name="log_password">
                <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>

				<input type="submit" value="Login" name="login_button">
				
                 </form>
            </div>
			<div class="register-show">
				<h1 id="register-heading">REGISTER</h1>
            <form action="register.php" method="POST">
                <input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
                    ?>" required>
                    <br>
                    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>

                <input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					<br>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
                <input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
                    ?>" required>
                    	<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>
                <input type="password" name="reg_password" placeholder="Password" value="<?php
					if(isset($_SESSION['reg_email2'])) 
					{
						echo $_SESSION['reg_email2'];
					}
					?>"required>
                <input type="password" name="reg_password2" placeholder="Confirm Password" value="<?php
					if(isset($_SESSION['reg_lname'])) 
					{
						echo $_SESSION['reg_lname'];
					}
                    ?>"required>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>

					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
                <input type="submit" value="Register" name="register_button">
                <?php if(in_array("<span style='color: #14C800;'>You're all set! Check your mail!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					
            </form>
			</div>
		</div>
	</div>
  <script>
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});



    
    
</script>
</body>
</html>