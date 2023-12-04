<?php
    $name= $_POST["From"];
    $email= $_POST["Email"];
    $profile= $_POST["Profile"];
    $subject= $_POST["Subject"];
    $message= $_POST["Message"];

    $mailheader="From: ".$name."<".$email.">\r\n";
    //$finalmessage=.$message."\n".$profile.;

    $recipient="aisana16zh@gmail.com";

    mail($recipient,$subject,$message,$mailheader)
    or die("Error");

    echo "message sent";

?>