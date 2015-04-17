<?php
//local connection
//$con = mysqli_connect('localhost', 'root', 'jcd2829', 'wedding');
//production database
include_once "db_connect.php";

$result = mysqli_query($con, "SELECT * FROM comments ORDER BY created_on DESC");

while ($comments = mysqli_fetch_array($result)) {
    $format_date = substr($comments['created_on'], 0, 10);
    print "<div class='comment-wrapper'>";
      print "<div class='comment-text'>";
      print $comments['comment_message'];
      print "</div>";
      print "<div class='comment-author'>";
      print "Left By: " . $comments['comment_name'] . " on " . $format_date;
      print "</div>";
    print "</div>";
}
?>