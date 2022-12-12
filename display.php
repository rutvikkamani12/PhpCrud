<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <form action="display.php" method="post">
        Sort By:
        <select name="cat">
            <option value="age">Age</option>
            <option value="name">name</option>
        </select>
        <input type="submit" name="sort" value="Sort">
    </form>

    </table>

    <?php
session_start();
if (isset($_SESSION['uname'])) {
    include("conn.php");
    $query = "select * from user";

    if (isset($_POST['sort'])) {

        if ($_POST['cat'] == "age") {
            $query = "select * from user order by age";
        } elseif ($_POST['cat'] == "name") {
            $query = "select * from user order by name";
        } else {
            $query = "select * from user";
        }
    }

    $res = mysqli_query($conn, $query);

    if (mysqli_num_rows($res) > 0) {
        // echo "<table border=1 style='width:100%;'><thead><tr><th>Id</th><th>Name</th><th>Age</th><th>Actions</th></tr></thead>";
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_array($res)) {
            $id = $row['Id'];
            echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'];
            echo "</td>";
            echo "<td><a href='edit.php?id=" . $id . "' class='btn btn-info btn-sm'>Update</a>|<a href='delete.php?id=" . $id . "' class='btn btn-info btn-sm'>Delete</a></td>";

        }
        echo "</table>";
    } else {
        echo "Error Page";
    }


} else {
    header("Location:login.php");
    exit();
}
        ?>
        <a href="home.php" class="btn btn-info btn-sm">Back</a><br>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</body>

</html>