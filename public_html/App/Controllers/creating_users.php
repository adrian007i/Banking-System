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
               <li><a href="../../public/index.php"> Home</a></li>
               <li><a href="../../public/contact.php"> Contact Us</a></li>
               <li><a href="../../public/register.php">Registration</a></li>
            </ul>
         </div>
		 
        <div id= "bottom">
            <h2 style ="color:white;">Welcome to the team!</h2>
            <?php
				require_once('login.php');
				
				//connecting to db
				
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				// takes the data from the registration form to insert values into the database	
				$user_fname=$_POST['fname'];
				$user_lname=$_POST['lname'];
				$user_gender=$_POST['gender'];
				$user_password=$_POST['reg1pass'];
				$user_password=MD5($user_password);
				$user_address=$_POST['address'];
				$user_phone=$_POST['phone'];
				$user_email=$_POST['email'];
				
				//ensure no duplicates of emails is added
				$query2="SELECT * FROM user where email='$user_email'";
				$results2=mysqli_query($connect,$query2);
				
				if (mysqli_num_rows($results2) > 0){ 
					echo "<h1>This email address is already in use.</h1>";
				}
				
				else {
				
				
				//preventing sql injections by removing "/'"
				$user_fname=str_replace("'", " ", "$user_fname");
				$user_lname=str_replace("'", " ", "$user_lname");
				$user_gender=str_replace("'", " ", "$user_gender");
				$user_address=str_replace("'", " ", "$user_address");
				$user_phone=str_replace("'", " ", "$user_phone");
				$user_email=str_replace("'", " ", "$user_email");
				
				
				//testing database connection
				if(!$connect){
					echo'you was unable to connect to the database'.mysqli_connect_error();
					
				}
				else{
					echo'you sucessfully connected to the database';
				}
				
				
				$query="INSERT INTO user (email ,first_name,last_name,address,phone,password,gender,active) 
					VALUES ('$user_email','$user_fname','$user_lname',
					'$user_address','$user_phone','$user_password','$user_gender',0);";
				
	
				if ($row=mysqli_query($connect,$query)){
					
                    $to      = $user_email;
                    $subject = 'Signup Verification'; 
                    $message = "hello $user_email \nThanks for signing up!,\n
                    			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                    			\n\n
                    			URL:https://adriansystem.000webhostapp.com/App/Controllers/email_access_verified.php?code=$user_password
                    			";
                     
                    
                     
                                         
                    $headers ='From:noreply@adriansystem.000webhostapp.com/';
                    mail($to, $subject, $message, $headers); // Send our email
                     echo '<script>alert("Account Created");</script>';
                     echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';

				}
	
				else echo " ,the query was unsucessful.";
				
			}	
				
				
?>
				
            
         </div> 
         <div id= "footer">
			<?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
   
   
</html>

