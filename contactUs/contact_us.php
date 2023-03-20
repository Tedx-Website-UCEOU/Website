<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'saimoukthik777@gmail.com';

    $email_subject = "New Form request";
    $email_body = "User name: $name.\n".
                        "User email: $visitor_email.\n".
                        "User phone: $visitor_phone.\n".
                            "User message: $message.\n";

    $to = 'vishwatej9991@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers.= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: contact_us.html");
?>