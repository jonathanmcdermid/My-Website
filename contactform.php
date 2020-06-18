<?php
    if ($_POST['submit']) {
        $mailFrom = "admin@jon.engineering";
        $mailTo = "jonathan.mcdermid1@ucalgary.ca";
        $txt = $_POST['message'];
	    $subject = "A user wants to talk! From: " .$POST['email'];
        $headers = "From :" .$mailFrom;
        mail ($mailTo, $subject, $txt, $headers);
        header("Location: contact.html");
        echo 'Your message has been sent!';
    }