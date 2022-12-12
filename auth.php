<?php
session_start();
if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = $_POST["uname"];
    $pswd = $_POST["password"];

    if ($uname == "admin" && $pswd == "admin") {
        $_SESSION['uname'] = $uname;
        header("Location: home.php");
    } else {
        header("Location: login.php?error=Invalid User or Password !!");
    }
} else {
    echo "User and Password required !!";
}

?>