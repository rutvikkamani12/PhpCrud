<?php

include("conn.php");

$id = $_GET['id'];

$query = "delete from user where id=" . $id;
if (mysqli_query($conn, $query)) {
    // echo "Deleted Successfully";
    header("Location: display.php");
    exit();
} else {
    echo "Error Page";
}

?>