<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "links.php" ?>
</head>

<body>
    <header>
        <?php

        include 'registration.php';

        if (isset($_POST['reset'])) {

            if (isset($_GET['token'])) {
                $token = $_GET['token'];

                $userpswd1 = mysqli_real_escape_string($con, $_POST['userpswd1']);
                $userpswd2 = mysqli_real_escape_string($con, $_POST['userpswd2']);

                $encrypt = password_hash($userpswd1, PASSWORD_BCRYPT);
                $cpencrypt = password_hash($userpswd2, PASSWORD_BCRYPT);

                if ($userpswd1 == $userpswd2) {

                    $update = " UPDATE customers SET pswd = '$encrypt',cpass = '$cpencrypt' WHERE token = '$token' ";

                    $iquery = mysqli_query($con, $update);
                    if ($iquery) {
                        $_SESSION['msg'] = "Your password has been changed successfully";
                        header('location:login.php');
                    } else {
                        $_SESSION['passmsg'] = "Your password change Failed!! Please try again.";
                        header('location:reset_pass.php');
                    }
                } else {
                    $_SESSION['passmsg'] = "Passwords are not matching!! Please try again.";
                }
            } else {
        ?>
                <script>
                    alert("No token Found!");
                </script>
        <?php
            }
        }
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img class="logo" src="./images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="index.php">Home </a> </li>
                        <li class="nav-item"><a class="nav-link" href="brands.php"> Brands </a></li>
                        <li class="nav-item"><a class="nav-link" href="queryform.php"> Contact Us </a></li>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Login/Register </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="signup.php">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <h2>Reset Password</h2>
            <p class="bg-white rounded mb-2 text-center">
                <?php
                if (isset($_SESSION['passmsg'])) {
                    echo $_SESSION['passmsg'];
                } else {
                    echo $_SESSION['passmsg'] = "";
                }
                ?>
            </p>
            <form action="" method="POST">

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" data-toggle="password" placeholder="Enter New password" name="userpswd1" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" data-toggle="password" placeholder="Confirm password" name="userpswd2" required>
                </div>
                <button type="submit" class="btn btn-dark" name="reset">Reset Password</button>
                <br>
                <a class="have" href="login.php">Have an Account?</a>
            </form>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="fixed-bottom">
        <div>
            <div>
                <p class="footer-links">Connect With Us</p>
            </div>
            <div class="footer-right">
                <a href="#" style="color: #bababa;"><i class="fa fa-facebook"></i></a>
                <a href="#" style="color: #bababa;"><i class="fa fa-twitter"></i></a>
                <a href="#" style="color: #bababa;"><i class="fa fa-linkedin"></i></a>
                <a href="#" style="color: #bababa;"><i class="fab fa-whatsapp"></i></a>
            </div>

            <div class="footer-left">
                <p>Copyright ©
                    <?php echo date("Y"); ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var dummyContent = $(".dummy-content").children(),
            i;

        $("#add-content").click(function(e) {
            e.preventDefault();

            if ($(dummyContent[0]).is(":visible")) {
                for (i = 0; i < dummyContent.length; i++) {
                    $(dummyContent[i]).fadeOut(600);
                }
            } else {
                for (i = 0; i < dummyContent.length; i++) {
                    $(dummyContent[i])
                        .delay(600 * i)
                        .fadeIn(600);
                }
            }
        });
    </script>
    <script type="text/javascript">
        $("#password").password('toggle');
    </script>
</body>

</html>