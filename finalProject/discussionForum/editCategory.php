<?php
// Start the session
session_start();
?>
<?php
include '../connect.php';
doDB();
if (!$_POST) {
	//haven't seen the selection form, so show it
	$display_block = "<h1>Edit Post</h1>";
	$saved_id = $_SESSION['category_id'];
	$saved_title = $_SESSION['category_title'];
	$saved_thread_text = $_SESSION['thread_text'];
	//get record from categorys table
	$get_category_sql = "SELECT * FROM ks_forum_category WHERE category_id = $saved_id;";
	$get_category_res = mysqli_query($mysqli, $get_category_sql) or die(mysqli_error($mysqli));
	// get record from thread table
	$get_thread_sql = "SELECT * FROM ks_forum_thread WHERE category_id = $saved_id;";
	$get_thread_res = mysqli_query($mysqli, $get_thread_sql) or die(mysqli_error($mysqli));

	if (mysqli_num_rows($get_category_res) < 1) {
		//no records
		$display_block .= "<p><em>There was an error retrieving your category!</em></p>";
	} else {
		//category record exists, so display category and thread information for editing
		$rec = mysqli_fetch_array($get_category_res);
		$display_id = stripslashes($rec['category_id']);
		$display_title = stripslashes($rec['category_title']);
		$display_block .= "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
		$display_block .="<p>Topic Title: <input type='text' id='category_title' name='category_title' value='".$display_title."'></p>";
		$threadRec = mysqli_fetch_array($get_thread_res);
		$display_thread = stripslashes($threadRec['thread_text']);
		$display_block .="<p>Post Text: <textarea  style='vertical-align:text-top;' id='thread_text' name='thread_text'>".$display_thread."</textarea></p>";
		$display_block .= "<button type='submit' id='change' name='change' value='change'>Change entry</button></p>";
		$display_block .="</form>";
	}
	//free result
	mysqli_free_result($get_thread_res);
	mysqli_free_result($get_category_res);
}else{
	$clean_category_title = mysqli_real_escape_string($mysqli, $_POST['category_title']);
	$clean_thread_text = mysqli_real_escape_string($mysqli, $_POST['thread_text']);

	//create and issue the ks_forum_category update
	$update_category_sql = "UPDATE ks_forum_category SET category_title = '".$clean_category_title ."' WHERE category_id =".$_SESSION['category_id'];
	$update_category_res = mysqli_query($mysqli, $update_category_sql) or die(mysqli_error($mysqli));

	//create and issue the ks_forum_thread update
	$update_thread_sql = "UPDATE ks_forum_thread SET thread_text='" .$clean_thread_text."' WHERE category_id= ".$_SESSION['category_id'];
	$update_thread_res = mysqli_query($mysqli, $update_thread_sql) or die(mysqli_error($mysqli));

	//close connection to MySQL
	mysqli_close($mysqli);

	//create nice message for user
	$display_block ="<h2>Your category has been modified...</h2>";
	$display_block.="<p>The category title has been modified to: <strong><em>".$clean_category_title."</em></strong><br>";
	$display_block.="The category text has been modified to: <strong><em>".$clean_thread_text."</em></strong></p>";

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Posting</title>
<link href="../css/discussion.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $display_block; ?>
<input type="button" name="menu" id="menu" value="Return to Menu" onclick="location.href='discussionMenu.html'">
</body>
</html>
