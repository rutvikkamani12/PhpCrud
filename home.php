<?php
session_start();
if(isset($_SESSION['uname'])){
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
    <h1>Welcome <?php echo $_SESSION['uname']; ?> , This is Home page</h1>

    <td>
        <button type="submit">Logout</button>
    </td>
</body>
</html>

<?php
}
?>