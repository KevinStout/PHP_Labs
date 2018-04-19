<?php
include 'connect.php';
doDB();

//check to see if we're showing the form or adding the thread
if (!$_POST) {
   // showing the form; check for required item in query string
   if (!isset($_GET['thread_id'])) {
      header("Location: categorylist.php");
      exit;
   }

   //create safe values for use
   $safe_thread_id = mysqli_real_escape_string($mysqli, $_GET['thread_id']);

   //still have to verify category and thread
   $verify_sql = "SELECT ft.category_id, ft.category_title FROM forum_thread
                  AS fp LEFT JOIN forum_category AS ft ON fp.category_id =
                  ft.category_id WHERE fp.thread_id = '".$safe_thread_id."'";

   $verify_res = mysqli_query($mysqli, $verify_sql)
                 or die(mysqli_error($mysqli));

   if (mysqli_num_rows($verify_res) < 1) {
      //this thread or category does not exist
      header("Location: categorylist.php");
      exit;
   } else {
      //get the category id and title
      while($category_info = mysqli_fetch_array($verify_res)) {
         $category_id = $category_info['category_id'];
         $category_title = stripslashes($category_info['category_title']);
      }
?>
      <!DOCTYPE html>
      <html>
      <head>
      <title>Add Your Reply in <?php echo $category_title; ?></title>
      <link href="../css/discussion.css" rel="stylesheet" type="text/css" />
      </head>
      <body>
      <h1>Add Your Reply in <?php echo $category_title; ?></h1>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p><label for="thread_owner">Your Email Address:</label><br/>
      <input type="email" id="thread_owner" name="thread_owner" size="40"
         maxlength="150" required="required" autofocus></p>
      <p><label for="thread_text">thread Text:</label><br/>
      <textarea id="thread_text" name="thread_text" rows="8" cols="40"
         required="required"></textarea></p>
      <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
      <button type="submit" name="submit" value="submit">Add thread</button>
      </form>
      </body>
      </html>
<?php
      //free result
      mysqli_free_result($verify_res);

      //close connection to MySQL
      mysqli_close($mysqli);
   }

} else if ($_POST) {
      //check for required items from form
      if ((!$_POST['category_id']) || (!$_POST['thread_text']) ||
          (!$_POST['thread_owner'])) {
          header("Location: categorylist.php");
          exit;
      }

      //create safe values for use
      $safe_category_id = mysqli_real_escape_string($mysqli, $_POST['category_id']);
      $safe_thread_text = mysqli_real_escape_string($mysqli, $_POST['thread_text']);
      $safe_thread_owner = mysqli_real_escape_string($mysqli, $_POST['thread_owner']);

      //add the thread
      $add_thread_sql = "INSERT INTO forum_thread (category_id,thread_text,
                       thread_create_time,thread_owner) VALUES
                       ('".$safe_category_id."', '".$safe_thread_text."',
                       now(),'".$safe_thread_owner."')";
      $add_thread_res = mysqli_query($mysqli, $add_thread_sql)
                      or die(mysqli_error($mysqli));

      //close connection to MySQL
      mysqli_close($mysqli);

      //redirect user to category
      header("Location: showcategory.php?category_id=".$_POST['category_id']);
      exit;
}
?>

