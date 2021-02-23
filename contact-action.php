<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"]
    $subject = $_POST["subject"]
    $sender_email = $_POST["email"]
    $message = $_POST["message"]

    $receiver_email = "nelson182@live.ca"
    $headers = "From: " . $sender_email
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message

    mail($receiver_email, $subject, $message )
}