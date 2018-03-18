<?php
$mysqli = mysqli_connect("localhost", "root", "", "people");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $clean_old_textFirst = mysqli_real_escape_string($mysqli, $_POST['empFirstName']);
    $clean_old_textFirst =test_input($clean_old_textFirst);
    $clean_new_textFirst = mysqli_real_escape_string($mysqli, $_POST['newFirstName']);
    $clean_new_textFirst =test_input($clean_new_textFirst);
    
    $sql = "UPDATE names SET firstName='".$clean_new_textFirst."' WHERE firstName='" . $clean_old_textFirst ."'";
    $res = mysqli_query($mysqli, $sql);
    if ($res === TRUE) {
        echo "The record has been updated.";
    } else {
        printf("The record could not be updated: %s\n", mysqli_error($mysqli));
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