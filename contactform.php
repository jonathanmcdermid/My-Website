<?php
    if ($_POST['submit']) {
        $mailFrom = "admin@jon.engineering";
        $txt = $_POST['message'];
	    $mailTo = "jonathan.mcdermid1@ucalgary.ca";
	    $subject = "A user wants to talk! From: " .$POST['email'];
        $headers = "From :" .$mailfrom;
        mail ($mailTo, $subject, $txt, $headers)
        header("Location: contact.html");
        echo 'Your message has been sent!';
    }