<?php

  $First_name = $_POST['First Name'];
  $Last_name = $_POST['Last Name'];
  $visitor_email = $_POST['email'];
  $message_subject = $_POST['Message Subject'];
  $message = $_POST['Message'];

  $email_from = 'index.html';
  $email_subject ='New Form Submission from World Creative Studio Website';
  $email_body = "User Name: $First_name.\n".
                  "User Name: $Last_name.\n".
                    "User email: $visitor_email.\n".
                      "User message: $message_subject.\n"
                         "User message: $message.\n";
                        


    $to ="timiolaniyi10@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>