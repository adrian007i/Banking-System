<?php


if (isset($_SESSION['user_email'])) {
    echo '
		<br/><br/> <br/>
		<h4 style=" color:white;" >Hello, ' . $_SESSION['user_email'] . '</h4>
		 
		 <form name="logout" " method="post"> 
			<button type="submit" name="logout">logout</button>
		 </form>
		 <br/><br/>
		';
    
    //if user hit logout btn
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
		setcookie('email_remember', null, -1, '/');
		echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';
    }
}

//remember me from php cookie

elseif(isset($_COOKIE["email_remember"])){
		
		echo '<script>alert("We Remember You from Last time :)");</script>';
		$_SESSION['user_email']=$_COOKIE["email_remember"];
		echo '
			<br/><br/> <br/>
			<h4 style=" color:white;" >Hello, ' . $_SESSION['user_email'] . '</h4>
			 
			 <form name="logout" " method="post"> 
				<button type="submit" name="logout">logout</button>
			 </form>
			 <br/><br/>
			';
		
		//if user hit logout btn
		if (isset($_POST['logout'])) {
			session_unset();
			session_destroy();
		    setcookie('email_remember', null, -1, '/');
			echo '<script>window.location.replace("https://adriansystem.000webhostapp.com");</script>';
		}
		
}

else{
    echo'
	<br/>
	<form name="signin" style="display:inline;" action="https://adriansystem.000webhostapp.com/App/Controllers/verify_user.php" method="post" onsubmit="return login_validation();"> 
			<legend>Login</legend>
			<br/>
			<h4 style="display:inline; color:white;">Email: </h4> <input type = "text" name = "email" id="email"/> 
			<span id="error1"></span>
			<h4 style="display:inline; color:white;">Password: </h4> <input type="password" name="logpassword" id="logpassword"/>
			<input type="checkbox" onclick="myFunction3()"><h4  style="display:inline; color:white;">Show Password</h4><br/>
			<input type="checkbox" name="remember"><h4  style="display:inline; color:white;">Remember Me</h4>
			<span id="error2"></span>
			<br/>  <br/>
			<input type="submit" name ="submit" value="Login"/>
			<input type="submit" name ="passwordReset" value="Password Reset"/>
			<input type = "reset" name ="Reset" value = "Cancel"/>
								  
	</form>
							  

	<br/>
	';
	
	
	

}
?>