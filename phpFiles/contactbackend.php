<!--
 * Copyright © 2018 FIVE Studios
 *
 * See the LICENSE file at the top-level directory of this distribution
 * for licensing information.
 *
 * Unless otherwise agreed in a custom licensing agreement with the FIVE Studios,
 * no part of this software, including this file, may be copied, modified,
 * propagated, or distributed except according to the terms contained in the
 * LICENSE file.
 *
 * Removal or modification of this copyright notice is prohibited.
 * 
 * Questions: Contact Corey Ervin
 * E: corey@fivestudios.ca
 * 
--> 

<?php
	// Message Variables
	$msg = "";
	$msgClass = "";

	// Check for Submit
	if(filter_has_var(INPUT_POST, "submit")){
		// Get Form Data
		$name = htmlspecialchars($_POST["name"]);
		$email = htmlspecialchars($_POST["email"]);
		$message = htmlspecialchars($_POST["message"]);

		//Check the required fields 
		if(!empty($email) && !empty($name) && !empty($message)) {
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				//Failed
				$msg = "Please use a valid email";
			} else {
				//Passed
				// Recipient Email
				$toEmail = "bartekgodzwon@gmail.com";
				$subject = "Contact Request From".": ".$name;
				$body = "<h2>Contact Request</h2>
				<h4>Name</h4><p>".$name."</p>
				<h4>Email</h4><p>".$email."</p>
				<h4>Message</h4><p>".$message."</p>
				";

				//Email Header 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)) {
					//Email Sent
					$msg = "Your email has been sent. We will contact you within 24 hours.";
				} else {
					//Failed 
					$msg = "Your email was not sent";
					$msgClass = "alert-danger";
				}
			}
		} else {
			$msg = "Please fill in all fields";
			$msgClass = "alert-danger";
		}
	}
?>