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
            <h2 style ="color:white;">Password Reset</h2>
				<?php
			
				
					
				$user_password1=$_POST['reg1pass'];
				$user_password2=$_POST['reg2pass'];
				$user_email=$_POST['email'];
				
				if($user_password1 != $user_password2){
					
					echo '<script> alert("Passwords Dont Match");</script>';
				    echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';
				}
				
				else{
				    require_once('login.php');
			    	$connect=mysqli_connect($server,$username,$password,$dbase);
				    
					$user_password1=md5($user_password1);
					$query="Update user Set password= '$user_password1';";
							
					if ($row=mysqli_query($connect,$query)){
					
						echo "<br/><h1>Password Successfully Reset</h1>";
						
						
					}
		
					else echo "<br/><h1>Somthing went wrong with he query.</h1>".mysqli_error();	
				}
				
				?>	   
         </div> 	
         <div id= "footer">
			<?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
</html>
