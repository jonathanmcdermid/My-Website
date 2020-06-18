<?php

    if ($_GET['submit']) {
        $mailFrom = $_GET['email'];
        $txt = $_GET['message'];
	    $mailTo = "jonathan.mcdermid1@ucalgary.ca";
	    $subject = "A website user wants to talk!";
        if (mail ($mailTo, $subject, $txt, $mailFrom)) { 
            header("Location: contact.html");
            echo '<p>Your message has been sent!</p>';
            exit;
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }

?>