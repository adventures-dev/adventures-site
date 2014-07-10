<?php

	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST['message'];
	
	if($name && $email){
		$to = "b@adventur.es";
	    $subject = "New contact from ".$name." at adventur.es";
		$body = "<h1>New message from ".$name."</h1>
	    		<p>Email: ".$email."</p>
	    		<p>Phone: ".$phone."</p>
	    		<p>Message: ".$message."</p>";
	    	
				    
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$name.' <noreply@adventur.es>' . "\r\n";
		$headers .= "Reply-To: noreply@adventur.es" . "\r\n";;
		
		mail($to, $subject, $body, $headers);

		echo true;
	}else{
		echo "Something went wrong.  Please try again later.";
	}
	    
    
?>
