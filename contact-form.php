<?php
    $firstname = $_POST[ 'firstname'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];


    $email_from = 'clmorr07@icloud.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $firstname.\n".
                    "User Name1: $lastname.\n".
                        "User Message: $subject.\n";


    $to = "clmorr07@icloud.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: cantact.html");






?>