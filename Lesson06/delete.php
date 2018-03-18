<?php
$mysqli = mysqli_connect("localhost", "root", "", "people");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $clean_text = mysqli_real_escape_string($mysqli, $_POST['empLastName']);
    $clean_text =test_input($clean_text);
    $sql = "DELETE FROM names WHERE lastName='".$clean_text."'";
    $res = mysqli_query($mysqli, $sql);
    if ($res === TRUE) {
        echo "A record has been deleted.";
    } else {
        printf("Could not delete record: %s\n", mysqli_error($mysqli));
    }
    mysqli_close($mysqli);
    }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>