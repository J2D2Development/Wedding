<?php
//local connection
$con = mysqli_connect('localhost', 'root', 'jcd2829', 'wedding');
//production database - coming soon
//$con = mysqli_connect();

$result = mysqli_query($con, "SELECT * FROM comments ORDER BY created_on DESC");

while ($comments = mysqli_fetch_array($result)) {
print "<div class='comment-wrapper'>";
  print "<div class='comment-text'>";
  print $comments['comment_message'];
  print "</div>";
  print "<div class='comment-author'>";
  print "Left By: " . $comments['comment_name'];
  print "</div>";
print "</div>";
}
?>