<?php

if(isset($_POST['submit'])){
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "jonathan.mcdermid1@ucalgary.ca";
	$headers = "From: ".$mailFrom;
	$subject = "A website user wants to talk!";
	$txt = $message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>