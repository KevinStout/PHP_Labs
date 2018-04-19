<?php
include '../connect.php';
doDB();

//check for required fields from the form
if ((!$_POST['category_owner']) || (!$_POST['category_title']) || (!$_POST['thread_text'])) {
	header("Location: addCategory.html");
	exit;
}

//create safe values for input into the database
$clean_category_owner = mysqli_real_escape_string($mysqli, $_POST['category_owner']);
$clean_category_title = mysqli_real_escape_string($mysqli, $_POST['category_title']);
$clean_thread_text = mysqli_real_escape_string($mysqli, $_POST['thread_text']);

//create and issue the first query
$add_category_sql = "INSERT INTO ks_forum_category (category_title, category_create_time, category_owner) VALUES ('".$clean_category_title ."', now(), '".$clean_category_owner."')";

$add_category_res = mysqli_query($mysqli, $add_category_sql) or die(mysqli_error($mysqli));

//get the id of the last query
$category_id = mysqli_insert_id($mysqli);

//create and issue the second query
$add_thread_sql = "INSERT INTO ks_forum_thread (category_id, thread_text, thread_create_time, thread_owner) VALUES ('".$category_id."', '".$clean_thread_text."',  now(), '".$clean_category_owner."')";

$add_thread_res = mysqli_query($mysqli, $add_thread_sql) or die(mysqli_error($mysqli));

//close connection to MySQL
mysqli_close($mysqli);

//create nice message for user
$display_block = "<p>The <strong>".$_POST["category_title"]."</strong> category has been created.</p>";
?>
<!DOCTYPE html>
<html>
<head>
<title>New Category Added</title>
<link href="../css/discussion.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>New Category Added</h1>
<?php echo $display_block; ?>
<form>
<input type="button" name="menu" id="menu" value="Return to Menu" onclick="location.href='discussionMenu.html'">
</form>
</body>
</html>
