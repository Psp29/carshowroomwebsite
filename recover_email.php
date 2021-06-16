<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password: Enter Email</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "links.php" ?>
</head>

<body>
    <header>
        <?php

        include 'registration.php';

        if (isset($_POST['sendmail'])) {
            $useremail = mysqli_real_escape_string($con, $_POST['useremail']);

            $emailquery = " select * from customers where email='$useremail' ";
            $query = mysqli_query($con, $emailquery);
            $emailcount = mysqli_num_rows($query);
            if ($emailcount > 0) {

                $userdata = mysqli_fetch_assoc($query);

                $username = $userdata['name'];
                $token = $userdata['token'];

                $subject = "Password Reset";
                $body = "Hi, $username. Click here to reset your password http://localhost/car%20showroom/reset_pass.php?token=$token";
                $sender_email = "From: info.mycarsite@gmail.com";

                if (mail($useremail, $subject, $body, $sender_email)) {
                    $_SESSION['msg'] = "An Email with reset password link has been sent on the email address: $useremail";
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
                    alert("Email Not found!!");
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
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <label for="email">Please Enter your correct Email address:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="useremail" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-dark" name="sendmail">Send Mail</button>
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