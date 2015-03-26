<?php
//process contact form - simple email send
if(isset($_POST['submit'])) {
    $to = "joedriscoll79@gmail.com";
    $from = "joedriscoll79@yahoo.com";
    $subject = "Question about the wedding...";
    $message = $_POST['message'];

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: <" . $from . ">\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Thanks for sending... <a href='home.html'>Click here to go home</a>";
    } else {
        echo "error";
    }
}
?>