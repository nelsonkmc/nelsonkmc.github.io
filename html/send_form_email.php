<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $comments = $_POST['comments'];
    $from = 'From: TangledDemo';
    $to = 'demo@tangledindesign.com';
    $subject = 'Hello';

    $body = "From: $first_name $last_name\n E-Mail: $email\n Contact: $contact\n Message:\n $comments";


    if ($_POST['submit']) {
    if ($last_name != '' && $email != '') {
        if (mail ($to, $subject, $body, $from)) {
	        echo '<p>Your message has been sent!</p>';
	       } else {
	        echo '<p>Something went wrong, go back and try again!</p>';
  	    }
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
?>
