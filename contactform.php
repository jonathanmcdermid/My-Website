<?php

    $mailFrom = $_POST['email'];
	$message = $_POST['message'];
	$mailTo = "jonathan.mcdermid1@ucalgary.ca";
	$subject = "A website user wants to talk!";
	$txt = "\n".$message;

    if ($_POST['submit']) {
        if (mail ($mailTo, $subject, $txt, $mailFrom)) { 
            header("Location: contact.html");
            echo '<p>Your message has been sent!</p>';
            exit;
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }

?>