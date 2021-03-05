<?php

if(isset($_POST["submit"])){
    
    $domainName = "NelsonPeralta.ca";
    
    $name = $_POST["name"];
    $sender_email = $_POST["email"];

    $receiver_email = "nperalta@nelsonperalta.ca";
    $subject = $_POST["subject"];
    $message = "Message from " . $name . ":\n\n" . $_POST["message"] . "\n\nSent through the " . $domainName . " contact form.";    
    $headers = "From: " . $sender_email;

    $a = mail($receiver_email, $subject, $message, $headers);

    /* Debugging purposes
    if($a){
        print("Message was sent");
    } else {
        print("Message was NOT sent");
        print(var_dump($receiver_email, $subject, $message));
    }
    */
}