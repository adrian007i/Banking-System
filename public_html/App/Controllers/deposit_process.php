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
            <h2 style ="color:white;">Deposit</h2>
				<?php
			
				
				require_once('login.php');
				
				//connecting to db
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				
				$amount_to_deposit=$_POST['amt'];
				$acc=$_POST['accountss'];
				$user_email=$_SESSION['user_email'];
				$query="Update accounts Set amount=amount +$amount_to_deposit
						WHERE account_number='$acc';";
						
				if ($row=mysqli_query($connect,$query)){
				
					echo "<br/><h1>$amount_to_deposit has successfully been deposited</h1>";
					
					
				}
	
				else echo "<br/><h1>Somthing went wrong with he query.</h1>";	
			
				?>	   
         </div> 	
         <div id= "footer">
			<?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
</html>

