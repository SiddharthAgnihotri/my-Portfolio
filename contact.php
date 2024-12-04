<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$massage = $_POST['message'];


$email_from = 'agnihotri.siddharth2006.com';

$email_subject = "Siddharth Contact Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Message: $massage.\n";

      $to ="siddharth.agnihotri2017@gmail.com";
      $headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $visitor_email \r\n";
      
      mail($to, $email_subject, $email_body, $headers);

      header("Location: index.html");
?>