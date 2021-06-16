<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "links.php" ?>
</head>

<body>
    <header>
        <?php

        include 'registration.php';

        if (isset($_POST['signup'])) {
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $useremail = mysqli_real_escape_string($con, $_POST['useremail']);
            $userpswd1 = mysqli_real_escape_string($con, $_POST['userpswd1']);
            $userpswd2 = mysqli_real_escape_string($con, $_POST['userpswd2']);

            $encrypt = password_hash($userpswd1, PASSWORD_BCRYPT);
            $cpencrypt = password_hash($userpswd2, PASSWORD_BCRYPT);

            $token = bin2hex(random_bytes(15));

            $emailquery = " select * from customers where email='$useremail' ";
            $query = mysqli_query($con, $emailquery);
            $emailcount = mysqli_num_rows($query);
            if ($emailcount > 0) {
        ?>
                <script>
                    alert("Email already exists!");
                </script>
                <?php
            } else {
                if ($userpswd1 == $userpswd2) {

                    $insertquery = "insert into customers(name, email, pswd, cpass, token, status) values('$username','$useremail','$encrypt','$cpencrypt','$token','inactive')";

                    $iquery = mysqli_query($con, $insertquery);
                    if ($iquery) {

                        $subject = "User Activation";
                        $body = "Hi, $username. Click here to activate your account http://localhost/car%20showroom/activation.php?token=$token";
                        $sender_email = "From: info.mycarsite@gmail.com";

                        if (mail($useremail, $subject, $body, $sender_email)) {
                            $_SESSION['msg'] = "An Email with activation link has been sent on the email address: $useremail";
                            header('location:login.php');
                        } else {
                ?>
                            <script>
                                alert("Email Sending Failed!!");
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert("not inserted");
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Passwords are not matching!!");
                    </script>
        <?php
                }
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
            <h2>Sign Up</h2>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <label for="username">Display Name:</label>
                    <input type="text" class="form-control" id="usernm" placeholder="Enter username" name="username" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="useremail" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" data-toggle="password" placeholder="Enter password" name="userpswd1" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" data-toggle="password" placeholder="Confirm password" name="userpswd2" required>
                </div>
                <button type="submit" class="btn btn-dark" name="signup">Sign Up</button>
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