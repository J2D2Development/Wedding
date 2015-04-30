<?php
//process contact form - simple email send
if(isset($_POST['submit'])) {
    $to = "joedriscoll79@gmail.com";
    $from = "questions@driscollwedding.com";
    $subject = "Question about the wedding...";
    $message = "<p>" . $_POST['message'] . "</p><p>" . "From: " . $_POST['name'] . "<br />" . "At: " . $_POST['email'] . "</p>";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: <" . $from . ">\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Thanks for sending... <a href='index.html'>Click here to go home</a>";
    } else {
        echo "Sorry, there's been an error!  Please contact Joe directly with any questions at joedriscoll79@gmail.com";
        echo "<br /><br />";
        echo "<a href='index.html'>Click here to go home</a>";
    }
}
?>