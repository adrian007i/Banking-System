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
      <div id= "container">
         <div id= "header">
			<?php include 'header.php';?>
         </div>
         <div id="navMenu">
            <ul>
			   <?php include 'navigation.php';?>
            </ul>
         </div>
		 
        <div id= "bottom">
             <h1>Sign Up</h1>
            <form name="signup" action="../App/Controllers/creating_users.php"  method="post" onsubmit="return validateRegistrationForm();">
               <fieldset>
                  <legend>Registration Form</legend>
                  Email: <br/> <input type="text" name="email" id="email" placeholder="Email"/> <span class="errors"></span><br/>
                  First Name:<br/> <input type="text" name="fname" id="fname" placeholder="First name"/><span class="errors"></span><br/>
                  Last Name:<br/> <input type="text" name="lname" id="lname" placeholder="Last name"/><span class="errors"></span> <br/><br/>
                  Gender :
                  male<input type="radio" name="gender" value="male"/>
                  female<input type="radio" name="gender" value="female"/><span class="errors"></span>
                  
                  <br/><br/>
                  <fieldset>
                  <legend>Personal Information </legend>
                  Address: <br/> <input type="text" name="address" id="address" placeholder="Address"/><span class="errors"></span> <br/>
                  Phone: <br/> <input type="text" name="phone" id="phone" placeholder="Phone"/><span class="errors"></span> <br/>
                   
				   
				   
                  Password: <br/><input type="password" name="reg1pass" id="reg1pass" placeholder="Password"/> 
				  <input type="checkbox" onclick="myFunction()">Show Password
				  <span class="errors"></span> <br/>
				  
                  Re-enter Password: <br/><input type="password" name="reg2pass" id="reg2pass" placeholder="Re-Type Password"/>
				  <input type="checkbox" onclick="myFunction2()">Show Password
				  <span class="errors"></span><br/><br/>
                  </fieldset>
                  <br/>
                  <input type="submit"/>    
                  <input type="reset" value="Cancel"/>    
               </fieldset>
            </form>
         </div> 
         <div id= "footer">
			<?php include 'footer.php';?>
         </div>
      </div>
   </body>
   <script src="../scripts/script.js"></script>-->
</html>