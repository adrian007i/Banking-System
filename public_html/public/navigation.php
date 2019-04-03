<?php

if (isset($_SESSION['user_email'])) {
    
    echo '
	<li><a href="https://adriansystem.000webhostapp.com/public/index.php"> Home</a></li>
    <li><a href="https://adriansystem.000webhostapp.com/public/contact.php"> Contact Us</a></li>
	<li><a href="https://adriansystem.000webhostapp.com/App/Views/createAccount.php">Create Account</a></li>
	<li><a href="https://adriansystem.000webhostapp.com/App/Views/deposit.php">Deposit</a></li>
	<li><a href="https://adriansystem.000webhostapp.com/App/Views/withdraw.php">Withdraw</a></li>
	<li><a href="https://adriansystem.000webhostapp.com/App/Views/transfer.php">Transfer</a></li>
	';
}

else {
	echo'
		<li><a href="https://adriansystem.000webhostapp.com/public/index.php"> Home</a></li>
		<li><a href="https://adriansystem.000webhostapp.com/public/contact.php"> Contact Us</a></li>
		<li><a href="https://adriansystem.000webhostapp.com/public/register.php">Registration</a></li>
';
}
?>