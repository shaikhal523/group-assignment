<?php
    $name = $_Post['name'];
    $visitor_email = $_POST ['email'];
    $subject = $_POST ['subject']; 


    $email_from = 'teahh212@gmail.com'; 

    $email_subject = "New Form Submission"; 

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";
    
    $to = "akafathiah@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("Location: index.html");

?>