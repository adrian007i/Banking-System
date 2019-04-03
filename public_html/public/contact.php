<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Adrian Banking</title>
      <link rel="stylesheet" type="text/css" href="../css/cssFile.css"/>
      <link rel="shortcut icon" href="../images/logo.jpg"/>
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
			<?php include 'header.php';?>
         </div>
         <div id="navMenu">
            <ul>
			   <?php include 'navigation.php';?>
            </ul>
         </div>
         <div id= "top" >
            <h1>Interested in our services?</h1>
            <h3>Contact us: </h3>
            <h2>Tel: (868) 491-7832</h2>
            <h2>Email: abank@gmail.com</h2>
            <h3>OR Send us a message <a href="#" id="here">here</a></h3>
            <br/>
            <hr/>
         </div>
         <div class="contact">
            <form name="message" action="index.php" method="get" onsubmit="return validateContactForm();">
               <fieldset>
                  <legend>Contact US</legend>
                  <br/>
                  Name: <input type="text" name="name" id="name"/> 
                  <span id="nameMessage"></span><br/><br/>
                  Email: <input type="text" name="email" id="email"/>
                  <span id="emailMessage"></span><br/><br/>
                  <textarea rows="20" cols="50">Message here </textarea>
                  <br/><br/>
                  <input type="submit" name="submit" value="Send"/>	
                  <input type="reset" name="cancel" value="Cancel"/>	
               </fieldset>
            </form>
            <br/>
            <hr/>
         </div>
         <div id= "footer">
            <?php include 'footer.php';?>
         </div>
      </div>
   </body>
   <script src="../scripts/script.js"></script>
</html>