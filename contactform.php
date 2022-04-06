<?php

$message_sent = false

if (isset($_POST['submit'])) {

    if(filter_var($POST["email"], FILTER_VALIDATE_EMAIL)) {

        $name = $POST['name'];
        $mailFrom = $POST['email'];
        $phone = $POST['phone'];
        $message = $POST['message'];
    
        $mailTo = "info@onecarebylua.com"; 
        $headers = "From: ".$mailFrom;
        $body = ""
    
        $body .= "From: ".$name. "\r\n";
        $body .= "Email: "$mailFrom. "\r\n";
        $body .= "Phone: "$phone. "\r\n";
        $body .= "Message: "$message. "\r\n";
        
        
        // mail($mailTo, $headers, $body);
        
        $message_sent = true
    }

    else {
        $message_sent = false
    }


   
}

?>