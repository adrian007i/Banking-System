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
            <h2 style ="color:white;">Creating Bank Account!</h2>
            <?php
				require_once('login.php');
				
				//connecting to db
				
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				// takes the data from the registration form to insert values into the database	
				$user_email=$_SESSION['user_email'];
				$type=$_POST['type'];
				$account_number;
				$amount=$_POST['balance'];
				
				
				//testing database connection
				if(!$connect){
					echo'you was unable to connect to the database'.mysqli_connect_error();
					
				}
				else{
					echo'you sucessfully connected to the database';
				}
				
				$query="INSERT INTO accounts (amount,email,account_type,date_created) VALUES ('$amount','$user_email','$type',now());";
				
	
				if ($row=mysqli_query($connect,$query)){
					echo ", Sucessfully Created a $type account with a deposit of $amount.
					<br/><br/>
					";
				}
	
				else echo " ,the query was unsucessful.";
?>
				
            
         </div> 
         <div id= "footer">
			<?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
</html>

