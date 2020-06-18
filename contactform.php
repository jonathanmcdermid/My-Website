<?php
    if ($_POST['submit']) {
        $mailFrom = $_POST['email'];
        $txt = $_POST['message'];
	    $mailTo = "jonathan.mcdermid1@ucalgary.ca";
	    $subject = "A website user wants to talk!";
        $headers = "From :" .$mailfrom;
        mail ($mailTo, $subject, $txt, $headers)
        echo 'Your message has been sent!';
    }
?>