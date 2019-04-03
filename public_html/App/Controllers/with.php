<?php
		
				
				require_once('login.php');
				
				//connecting to db
				
				$connect=mysqli_connect($server,$username,$password,$dbase);	
				
				$user_email=$_SESSION['user_email'];
				$query="SELECT account_number,amount,account_type FROM accounts WHERE
						email='$user_email' AND account_type !='credit';";
						
				$results=mysqli_query($connect,$query);	
						
				
					
	if (mysqli_num_rows($results) > 0){ 
		
		while ($user_record = mysqli_fetch_assoc($results)) {
        	echo' <option value="' .$user_record["account_number"].'">
								Account #' .$user_record["account_number"].' has $'.$user_record["amount"] 
							.'</option>';
    }
			
		
		
}
				
				
					
				
?>	
		