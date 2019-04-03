<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Adrian Banking</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="../../css/cssFile.css"/>
      <link rel="shortcut icon" href="../../images/logo.jpg"/>
   </head>
   <body>
      <div id= "container">
         <div id= "header">
			<?php include '../../public/header.php';?>
         </div>
         <div id="navMenu">
            <ul>
              <?php include '../../public/navigation.php';?>
            </ul>
         </div>
		 
        <div id= "bottom">
            <h2 style ="color:white;">User Verification!</h2>
        <?php
        

				require_once('login.php');
				
				//connecting to db
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				$message="";	
				$user_email=$_POST['email'];
				$user_password=$_POST['logpassword'];
				$user_password=MD5($user_password);
					
				if($user_email== "" || $user_password==""){
					echo"please enter Email & passowrd";
				}	
				
				else{
					if(!$connect){
						$message='you was unable to connect to the database'.mysqli_connect_error();
						
					}
					else{
						$message='you sucessfully connected to the database';
					}
					
					
					if (isset($_POST['submit'])) {
					    
					//testing dtesting for valid user query
					$query="SELECT * FROM user WHERE
							email='$user_email' AND password='$user_password';";
							
					$results=mysqli_query($connect,$query);	
							
					//testing if query was sucessful
					
					if (mysqli_num_rows($results) > 0){ 
						// if the user is valid all their data besides password is stored in a session.
						
						$user_record = mysqli_fetch_assoc($results);
						$_SESSION ['user_email']=$user_record['email'];		
						
						//ensure user confirms email 
						if($user_record['active']<1){
							
							echo '<script>alert("You must Aauthenticate VIA email! :)");</script>';
							session_unset();
							session_destroy();
							setcookie('email_remember', null, -1, '/');
						}
						//cookie to remember me
						else{
						  if (isset($_POST['remember'])) {
							setcookie ("email_remember",$user_email,time() + (86400 * 30), "/");
							
						}
						   echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';
                        
						}
						
						
					}
					
					else{
    					echo '
    					<center>
    						<img src="../../images/fail.jpg"/>
    					</center>';
    					
    					echo"$message; but Invalid Email or password";
					
					}
				}
					if (isset($_POST['passwordReset'])) {
					    $code=MD5($user_email);
                        $to      = $user_email;
                        $subject = 'Password Reset'; 
                        $message = "hello $user_email \nReset you password below:\n
                        click the link below to reset your password:
                        \n\n
                        URL:https://adriansystem.000webhostapp.com/App/Controllers/resetpage.php?code=$code&email=$user_email
                        ";
                                        
                        $headers ='From:noreply@adriansystem.000webhostapp.com/';
                        mail($to, $subject, $message, $headers); // Send our email
                        echo '<script>alert("Check you email for password reset link d'. $user_email.'d");</script>';
                        echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';
					}
					
					
				}
				
				
				
   
?>	
				
            
         </div> 
         <div id= "footer">
			<?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
</html>
