<?php
// Start the session
session_start();
?>
<?php
include 'connect.php';
doDB();
$saved_id = $_SESSION['topic_id'];
//perform deletion from forum_topics
$del_topic_sql = "DELETE FROM forum_topics WHERE topic_id = $saved_id;";
$del_topic_res = mysqli_query($mysqli, $del_topic_sql) or die(mysqli_error($mysqli));
// perform deletion from forum_posts
$del_post_sql = "DELETE FROM forum_posts WHERE topic_id = $saved_id;";
$del_post_res = mysqli_query($mysqli, $del_post_sql) or die(mysqli_error($mysqli));

$display_block = "<hr><h2><em>Your topic has been deleted.</em></h2>";
$display_block .= "<p><a href='discussionMenu.html'>Return to Menu</a></p><hr>";

//close connection
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion Confirmation</title>
<link href="discussion.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $display_block; ?>
</body>
</html>
