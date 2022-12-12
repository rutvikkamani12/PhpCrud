<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<?php
session_start();
if (isset($_SESSION['uname'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome
        <?php echo $_SESSION['uname']; ?> , This is Home page
    </h1>
    <a href="display.php" class="btn btn-primary btn-sm">Display</a>

    <br>
    <a href="logout.php" class="btn btn-danger btn-sm mt-2">Logout</a>
</body>

</html>

<?php
} else {
    header("location:login.php");
    exit();
}

?>