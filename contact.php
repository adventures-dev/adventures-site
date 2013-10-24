<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

    $from = "info@stockcast.it";
    $subject = "Contact form from adventur.es site";
    $body = "<h1>New message from ".$name."</h1>
    		<p>email: ".$email."</p>
    		<p>phone: ".$phone."</p>

    		<p>Message: ".$message."</p>";
    	

    include_once('ses.php');
    $con=new SimpleEmailService("AKIAIMMFQYYH2ARYVZUA","np46qEKPdUWjrDmakBmmPrpVDKmssGVLBiB7IBQ7");
    $con->listVerifiedEmailAddresses();

    $m = new SimpleEmailServiceMessage();
    $m->addTo("b@adventur.es");
    $m->setFrom($from);
    $m->setSubject($subject);
    $m->setMessageFromString(null, $body);
    $con->sendEmail($m);


    echo true;
?>
