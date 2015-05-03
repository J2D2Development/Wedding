<?php
//process contact form - simple email send

$msg = $_POST['message'];
$name = $_POST['name'];
$from_email = $_POST['email'];

$to = "joedriscoll79@gmail.com";
$from = "questions@driscollwedding.com";
$subject = "Question about the wedding...";
$message = "<p>" . $msg . "</p><p>" . "From: " . $name . "<br />" . "At: " . $from_email . "</p>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: <" . $from . ">\r\n";

if(@mail($to, $subject, $message, $headers)) {
    echo "Thanks for contacting us!<br />";
    echo "Someone will be in touch soon to address your concerns  This pop up will close in 7 seconds, or click anwhere outside it to close.";
} else {
    echo "Sorry, there's been an error!  Please contact Joe directly with any questions at joedriscoll79@gmail.com";
}

?>