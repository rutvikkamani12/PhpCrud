<?php
include("conn.php");
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];
$age = $_POST['age'];

$query = "insert into user values ('','$uname','$pswd','$age')";
if (mysqli_query($conn, $query)) {
    $_SESSION['uname'] = $uname;
    header("Location: login.php");
} else {
    echo "Invalid Data...";
}

?>