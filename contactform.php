<?php

if(!empty($_POST["submit"])) {
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "jonathan.mcdermid1@ucalgary.ca";
	$mailheader = "From: $mailFrom \r\n";
	$subject = "A website user wants to talk!";
	$txt = "\n".$message;

	mail($mailTo, $subject, $txt, $headers) or die("Error!");
	echo "Thank You!";
}

?>