<?php
session_start();
if (isset($_SESSION['uname'])) {
    include("conn.php");

    if (isset($_POST['update'])) {

        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];
        $age = $_POST['age'];
        $id = $_POST['id'];

        $query = "update user set name='$uname', password= '$pswd', age='$age' where id = '$id'";

        if (mysqli_query($conn, $query)) {
            header("Location:display.php");
        } else {
            echo "Error Page";
        }

    }
} else {
    header("Location:login.php");
    exit();
}
?>