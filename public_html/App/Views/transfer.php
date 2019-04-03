<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Adrian Banking</title>
      <link rel="stylesheet" type="text/css" href="../../css/cssFile.css"/>
      <link rel="shortcut icon" href="../../images/logo.jpg"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </head>
   <style>
      h1,h3{
      color:white;
      font-family:verdana;
      text-align:center;
      }   
      a{
      color:white;
      }
      a:visited{
      color:white;
      }
	  h2{
	  
		color:red;
	  }
	  
   </style>
   <body>
      <div id= "container" style="background-color:#34363a;">
         <div id= "header">
			<?php include '../../public/header.php';?>
         </div>
         <div id="navMenu">
            <ul>
				 <?php include '../../public/navigation.php';?>
            </ul>
         </div>
		  <div id= "bottom">
             <h1>Transfer</h1>
			 <hr/>
            <form name="withdraw" action="../Controllers/transfer_process.php"  method="post">
               <fieldset>
                  <legend>Transfer Section</legend>
                   Accounts Owned: #  
					<select name="accountss">
						<?php include '../Controllers/accounts_of_user.php';?>
					</select>
					<br/><br/>
				  Transfer to Account #: 
				  <select name="all">
						<?php include '../Controllers/all_users.php';?>
					</select>
				  <br/><br/>
                   Transfer Amount:  $ <input type="text" name="amt" id="amt" /><span class="errors"></span>
                  <br/><br/> 
                  <input type="submit"/>    
                  <input type="reset" value="Cancel"/>    
               </fieldset>
            </form>
         </div> 
        
         <div id= "footer">
            <?php include '../../public/footer.php';?>
         </div>
      </div>
   </body>
</html>