<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    <link rel="stylesheet" href="bootstrap/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <script src="bootstrap/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .login {
        border: 1;
        width: 400px;
        height: 420px;
        background-color: white;
    }
</style>

<body style="background-color: rgba(244, 245, 243, 0.877);">
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="border border-black login">
                <form action="auth.php" method="post">
                    <h2 class="text-center">Login</h2>
                    <?php
                        if (isset($_GET['error'])){
                            ?>
                            <h5 class="error"> <?php echo $_GET['error'];?></h5>
                        <?php } ?>
                    <div class="row">
                        <div class="col-10 ml-5 mt-4">
                            <label>UserName</label><br>
                            <input type="text"name="uname"  placeholder="Enter UserName" style="width:320px;">
                        </div>
                        <div class="col-10 ml-5 mt-4">
                            <div class="d-flex justify-content-between">
                                <label>Password</label>
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="d-flex justify-content-xl-around">
                                <input type="password" name="password" placeholder="Enter Password" style="width:320px;"/>
                                <input type="button" value="Show" class="btn btn-primary d-flex justify-content-around" style="width:50px; height:30px ;">
                            </div>
                        </div>
                        <div class="col-10 ml-5 mt-3">
                            <input type="checkbox" value="Remeber Me">Remeber Me
                        </div>
                        <div class="col-10 ml-5 mt-3">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <!-- <input type="button" value="Login" class="btn btn-primary" style="width: 320px;"> -->
                        </div>
                        <div class="col-10 ml-5 mt-3 text-center">
                            <p>Don't have an account?<a href="#">Create One</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h6 style="margin-left:570px; margin-top: 20px;">Copyright@2022 - Rutvik Kamani</h6>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        
    </script>
</body>

</html>