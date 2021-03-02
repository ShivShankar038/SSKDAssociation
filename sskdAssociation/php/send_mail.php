<?php	
	
	if (isset($_REQUEST['email']))  {
		$admin_email = "shivshankar038@@gmail.com";
		$new_email = $_REQUEST['new_email'];
		$name = $_REQUEST['name'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];

		//send email
		mail($admin_email, $name, "$message", "From:" . $new_email);
		//Email response
		echo "Thank you for contacting us!";
	}
?>
