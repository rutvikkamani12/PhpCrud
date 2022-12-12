<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="bootstrap/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .register {
            border: 1;
            width: 400px;
            height: 420px;
            background-color: white;
        }
    </style>
</head>

<body style="background-color:darkgray;">
    <div class="container">
        <div class="d-flex justify-content-center mt-2">
            <div class="border border-black register">
                <form action="insert.php" method="POST">
                    <h1 class="text-center">Register</h1>

                    <div class="row">
                        <div class="col-10 ml-5 mt-4">
                            <label>UserName</label><br>
                            <input type="text" name="uname" placeholder="Enter UserName" style="width:320px;">
                        </div>
                        <div class="col-10 ml-5 mt-4">
                            <label>Password</label><br>
                            <input type="password" name="pswd" placeholder="Enter Password" style="width:320px;">
                        </div>
                        <div class="col-10 ml-5 mt-4">
                            <label>Age</label><br>
                            <input type="number" name="age" placeholder="Enter Age" style="width:320px;">
                        </div>
                        <div class="col-8 mt-5">
                            <button type="submit" class="btn btn-primary w-100"
                                style="margin-left: 80px;">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>