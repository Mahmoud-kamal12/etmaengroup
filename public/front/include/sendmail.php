<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$subject = $_POST['sub']; 
	$phone = $_POST['phone']; 
	$messagebody = $_POST['message']; 	
	
	// Set the from email address.
	$from = "<example@example.com>";
	
	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "example@gmail.com"; 

	// Build the email content.
	$message = "
				Hi,

				A visitor has been sent a query from ROXY.

				Name: $name

				Visitor Email: $email

				Subject: $subject
                
				Phone: $phone

				Message: $messagebody


				Thanks,

				ROXY 

				
				This message was sent to $to.  

				ROXY. 2750 Quadra Street Victoria, Canada.
				"; 


	// send the email 
	if(mail ($to,$subject,$message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>

