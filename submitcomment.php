<?php

//local db
$con = mysqli_connect('localhost', 'root', 'jcd2829', 'wedding');
//production db - coming soon
//$con = mysqli_connect();

if(mysqli_connect_errno()) {
    echo "Connection failure: " . mysqli_connect_error();
};

$val = mysqli_query($con, 'SELECT 1 FROM comments');
if(!$val) {
    $sql = 'CREATE TABLE comments
    (
        comment_id int NOT NULL AUTO_INCREMENT,
        comment_name VARCHAR(150),
        comment_email VARCHAR(150),
        comment_message VARCHAR(200),
        created_on timestamp,
        PRIMARY KEY (comment_id)
    )';

    if(!mysqli_query($con, $sql)) {
        echo "Creation Error: " . mysqli_error($con) . '<br />';
    }
}

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

$sql = "INSERT INTO comments (comment_name, comment_email, comment_message)
        VALUES ('$name', '$email', '$message')";

if(!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
} else {
    echo 'success!';
}
?>