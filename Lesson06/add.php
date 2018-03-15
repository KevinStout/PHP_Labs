<?php
$mysqli = mysqli_connect("localhost", "root", "", "people");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $clean_textFirst = mysqli_real_escape_string($mysqli, $_POST['empFirstName']);
    $clean_textFirst = test_input($clean_textFirst);
    $clean_textLast = mysqli_real_escape_string($mysqli, $_POST['empLastName']);
    $clean_textLast = test_input($clean_textLast);
    $sql = "INSERT INTO names (firstName, lastName) VALUES ('".$clean_textFirst."','".$clean_textLast."')";
    $res = mysqli_query($mysqli, $sql);

    if ($res === TRUE) {
        echo "A record has been inserted.";
    } else {
        printf("Could not insert record: %s\n", mysqli_error($mysqli));
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