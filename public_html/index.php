<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Adrian Banking</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="https://adriansystem.000webhostapp.com/css/cssFile.css"/>
      <link rel="shortcut icon" href="../images/logo.jpg"/>
   </head>
   <body>
      <div id= "container">
         <div id= "header">
			 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/public/header.php'); ?>
         </div>
         <div id="navMenu">
            <ul>
			    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/public/navigation.php'); ?>
            </ul>
         </div>
		 
         <div id= "homeleft">
            <br/>
           `	<img src='https://adriansystem.000webhostapp.com/images/bank.jpg'>
            <br/><br/>
            
         </div>
         <div id= "homeright">
            <h2 class="mainHeading">Bank with us </h2>
            <hr/>
            <p>
               Our team is dedicate on giving you the you
			   the highest quality of service for all your banking needs. 
               Users can create a banking, savings or checkings account once
			   they have been registered as a user.
            </p>
            <p>
               	<h3>Our users are able to perform the following tasks:</h3>
				
					<p>Deposits can be made to the 3 different types of accounts.</p>
					<p>Withdrawals can only be made from Savings or Chequing Accounts.</p>
					<p>Transfer can be made among all 3 accounts.</p>
				
            </p>
         </div>
         <div id= "footer">
             <?php require_once($_SERVER['DOCUMENT_ROOT'].'/public/footer.php'); ?>
         </div>
      </div>
   </body>
</html>