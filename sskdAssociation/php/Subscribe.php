<?php	
	
	if (isset($_REQUEST['email']))  {
		$admin_email 	= "shivinfolative@gmail.com";
		$email 		= $_REQUEST['email'];
		$subject  	= "Subscriber Message";
		$message	= "Features and Technology";
		
		mail($admin_email, $subject, $message, "From:" . $email);
		
		echo "Thank you for Subscriber!";
	}
?>