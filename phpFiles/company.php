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
		$email = htmlspecialchars($_POST["email"]);

		//Check the required fields
		if(!empty($email)) {
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				//Failed
				$msg = "Please use a valid email";
			} else {
				//Passed
				// Recipient Email
				$toEmail = "bartekgodzwon@gmail.com";
				$subject = "Newsletter Sign-Up".": ".$email;
				$body = "<h2>Newsletter Sign-Up Request</h2>
				<h4>Email</h4><p>".$email."</p>
				";

				//Email Header 
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: "."<".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)) {
					//Email Sent
					$msg = "Your email has been sent";
				} else {
					//Failed 
					$msg = "Your email was not sent";
				}
			}
		} else {
			$msg = "Please fill in the fields";
		}
	}
?>