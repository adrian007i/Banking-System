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
            <h2 style ="color:white;">User Verification!, You may now Attempt to log in</h2>
        <?php
				require_once('login.php');
				
				//connecting to db
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				$message="";	
				
				
				$user_password;
				
				if(!$connect){
					$message='you was unable to connect to the database'.mysqli_connect_error();
					
				}
				else{
					$message='you sucessfully connected to the database';
				}
				
				
				//checking url for hash value
				if(isset($_GET['code'])){
				    
				    //assigning has value to variable
				    $user_password=$_GET['code'];
				    
			    	$query="SELECT * FROM user WHERE password='$user_password';";
					$results=mysqli_query($connect,$query);
				     
    				if (mysqli_num_rows($results) > 0){ 
    					$user_record = mysqli_fetch_assoc($results);	
    					if($user_password==$user_record['password']){
    					    
    					    $query2="Update user Set active=1
    								WHERE password='$user_password';";
    								
    						if ($row=mysqli_query($connect,$query2)){
    						
    							echo "<script>alert('Account Verified via email.');</script>";
    						}
					}
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
