<?php
//process contact form - simple email send
if(isset($_POST['submit'])) {
    $to = "joedriscoll79@yahoo.com";
    $from = $_POST['email'];
    $subject = "Question about the wedding...";
    $message = $_POST['message'];

    $headers = "From: " . $from;
    $headers2 = "From:" . $to;
    if(mail($to, $subject, $message, $headers)) {
        echo "Thanks for sending... <a href='home.html'>Click here to go home</a>";
    } else {
        echo "error";
    }
}
?>