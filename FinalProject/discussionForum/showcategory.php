<?php
include 'connect.php';
doDB();

//check for required info from the query string
if (!isset($_GET['category_id'])) {
	header("Location: categorylist.php");
	exit;
}

//create safe values for use
$safe_category_id = mysqli_real_escape_string($mysqli, $_GET['category_id']);

//verify the category exists
$verify_category_sql = "SELECT category_title FROM forum_category WHERE category_id = '".$safe_category_id."'";
$verify_category_res =  mysqli_query($mysqli, $verify_category_sql) or die(mysqli_error($mysqli));

if (mysqli_num_rows($verify_category_res) < 1) {
	//this category does not exist
	$display_block = "<p><em>You have selected an invalid category.<br/>
	Please <a href=\"categorylist.php\">try again</a>.</em></p>";
} else {
	//get the category title
	while ($category_info = mysqli_fetch_array($verify_category_res)) {
		$category_title = stripslashes($category_info['category_title']);
	}

	//gather the threads
	$get_thread_sql = "SELECT thread_id, thread_text, DATE_FORMAT(thread_create_time, '%b %e %Y<br/>%r') AS fmt_thread_create_time, thread_owner FROM forum_thread WHERE category_id = '".$safe_category_id."' ORDER BY thread_create_time ASC";
	$get_thread_res = mysqli_query($mysqli, $get_thread_sql) or die(mysqli_error($mysqli));

	//create the display string
	$display_block = <<<END_OF_TEXT
	<p>Showing threads for the <strong>$category_title</strong> category:</p>
	<table>
	<tr>
	<th>AUTHOR</th>
	<th>thread</th>
	</tr>
END_OF_TEXT;

	while ($thread_info = mysqli_fetch_array($get_thread_res)) {
		$thread_id = $thread_info['thread_id'];
		$thread_text = nl2br(stripslashes($thread_info['thread_text']));
		$thread_create_time = $thread_info['fmt_thread_create_time'];
		$thread_owner = stripslashes($thread_info['thread_owner']);

		//add to display
	 	$display_block .= <<<END_OF_TEXT
		<tr>
		<td>$thread_owner<br/><br/>created on:<br/>$thread_create_time</td>
		<td>$thread_text<br/><br/>
		<a href="replytothread.php?thread_id=$thread_id"><strong>REPLY TO THREAD</strong></a></td>
		</tr>
END_OF_TEXT;
	}

	//free results
	mysqli_free_result($get_thread_res);
	mysqli_free_result($verify_category_res);

	//close connection to MySQL
	mysqli_close($mysqli);

	//close up the table
	$display_block .= "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Threads in category</title>
<link href="../css/discussion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	table {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th {
		border: 1px solid black;
		padding: 6px;
		font-weight: bold;
		background: #ccc;
	}
	td {
		border: 1px solid black;
		padding: 6px;
		vertical-align: top;
	}
	.num_thread_col { text-align: center; }
</style>
</head>
<body>
<h1>thread in category</h1>
<?php echo $display_block; ?>
<p>Would you like to <a href="discussionMenu.html">return to main</a>?</p>
</body>
</html>
