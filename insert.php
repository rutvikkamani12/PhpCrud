<?php
include("conn.php");
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];
$age = $_POST['age'];
$uploadfile = $_POST['upload_file'];

if(isset($_FILES['uploadFile']))
{
    $tempFileName = $_FILES["uploadFile"]["tmp_name"];
    $fileName = $_FILES["uploadFile"]["name"];
    $path = "C:/xampp/htdocs/php/project1/upload/";
    $desc = $path . $fileName;
    if(move_uploaded_file($tempFileName,$desc))
    {
        echo "Success";
    }
    else{
        echo "Error";
    }
}
else{
    echo "Please Select File";
}

$query = "insert into user values ('','$uname','$pswd','$age','$desc')";
if (mysqli_query($conn, $query)) {
    $_SESSION['uname'] = $uname;
    header("Location: login.php");
} else {
    echo "Invalid Data...";
}

?>