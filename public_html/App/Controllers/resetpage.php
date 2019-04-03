<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Adrian Banking</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <link rel="stylesheet" type="text/css" href="../css/cssFile.css"/>
      <link rel="shortcut icon" href="../images/logo.jpg"/>
   </head>
   <body>
		 
		 
        <div id= "bottom">
             <h1 style="display:inline;">Password Reset for: </h1>
             
             <?php
                if(isset($_GET['email']) && isset($_GET['code'])){
                    echo' <h1 style ="display:inline;"> '. $_GET['email'] .'</h1>';
                    
                echo'
                    <form name="signup" action="resetProcess.php"  method="post">
                        <fieldset>
                            <legend>Reset Form</legend>
                            
                            New Password: <br/><input type="password" name="reg1pass" id="reg1pass" placeholder="Password"/> 
                            <input type="checkbox" onclick="myFunction()">Show Password
                            <span class="errors"></span> <br/>
                            <input type="hidden" name="email"value="'.$_GET['email'].'">
                            Re-enter Password: <br/><input type="password" name="reg2pass" id="reg2pass" placeholder="Re-Type Password"/>
                            <input type="checkbox" onclick="myFunction2()">Show Password
                            <span class="errors"></span><br/><br/>
                            </fieldset>
                            <br/>
                            <input type="submit"/>    
                            <input type="reset" value="Cancel"/>    
                        </fieldset>
                    </form>';
                }
                else {
                    echo'somthing went wrong';
                }
             
             ?>

         </div> 
      </div>
   </body>
   <script src="../scripts/script.js"></script>-->
</html>