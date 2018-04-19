<?php
include 'connect.php';
doDB();

//gather the categorys
$get_category_sql = "SELECT category_id, category_title, DATE_FORMAT(category_create_time,  '%b %e %Y at %r') as fmt_category_create_time, category_owner FROM forum_category ORDER BY category_create_time DESC";
$get_category_res = mysqli_query($mysqli, $get_category_sql) or die(mysqli_error($mysqli));

if (mysqli_num_rows($get_category_res) < 1) {
	//there are no categorys, so say so
	$display_block = "<p><em>No categorys exist.</em></p>";
} else {
	//create the display string
    $display_block = <<<END_OF_TEXT
    <table style="border: 1px solid black; border-collapse: collapse;">
    <tr>
    <th>CATEGORY TITLE</th>
    <th># of THREADS</th>
    </tr>
END_OF_TEXT;

	while ($category_info = mysqli_fetch_array($get_category_res)) {
		$category_id = $category_info['category_id'];
		$category_title = stripslashes($category_info['category_title']);
		$category_create_time = $category_info['fmt_category_create_time'];
		$category_owner = stripslashes($category_info['category_owner']);

		//get number of threads
		$get_num_thread_sql = "SELECT COUNT(thread_id) AS thread_count FROM forum_thread WHERE category_id = '".$category_id."'";
		$get_num_thread_res = mysqli_query($mysqli, $get_num_thread_sql) or die(mysqli_error($mysqli));

		while ($thread_info = mysqli_fetch_array($get_num_thread_res)) {
			$num_thread = $thread_info['thread_count'];
		}

		//add to display
		$display_block .= <<<END_OF_TEXT
		<tr>
		<td><a href="showcategory.php?category_id=$category_id"><strong>$category_title</strong></a><br/>
		Created on $category_create_time by $category_owner</td>
		<td class="num_thread_col">$num_thread</td>
		</tr>
END_OF_TEXT;
	}
	//free results
	mysqli_free_result($get_category_res);
	mysqli_free_result($get_num_thread_res);

	//close connection to MySQL
	mysqli_close($mysqli);

	//close up the table
	$display_block .= "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Categorys</title>
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
	}
	.num_thread_col { text-align: center; }
	h1{
		text-align:left;
	}
</style>
</head>
<body>
<h1>Categorys</h1>
<?php echo $display_block; ?>
<p>Would you like to <a href="addCategory.html">add a category</a>?</p>
<p>Would you like to <a href="discussionMenu.html">return to main</a>?</p>
</body>
</html>
