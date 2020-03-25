<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email']
    $Address = $_POST['Address']
    $Order = $_POST['Order']


    $email_from = 'sadiajee80@gmail.com';

    $email_subject = "New Order";

    $email_body = "User Name: $name.\n".  
                    "User Email: $visitor_email.\n". 
                        "User Address: $Address.\n". 
                            "User Order: $Order.\n";
    
    
    $to ="tukkarshukkar@gmail.com"
    
    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>    