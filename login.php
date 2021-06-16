<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include "links.php" ?>
</head>

<body>
    <header>
        <?php

        include 'registration.php';
        if (isset($_POST['login'])) {
            $useremail = $_POST['useremail'];
            $userpswd = $_POST['userpswd'];

            $email_search = " select * from customers where email='$useremail' and status='active' ";
            $query = mysqli_query($con, $email_search);

            $email_count = mysqli_num_rows($query);

            if ($email_count) {
                $email_pass = mysqli_fetch_assoc($query);

                $db_pass = $email_pass['pswd'];
                $_SESSION['username'] = $email_pass['name'];

                $pass_decrypt = password_verify($userpswd, $db_pass);

                if ($pass_decrypt) {
                    if (isset($_POST['remember'])) {

                        setcookie('emailcookie', $useremail, time() + 86400);
                        setcookie('passcookie', $userpswd, time() + 86400);
        ?>
                        <script>
                            alert("successfully Logged In!");
                        </script>
                        <script>
                            location.replace("indexlogin.php");
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert("successfully Logged In!");
                        </script>
                        <script>
                            location.replace("indexlogin.php");
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Incorrect Password!!");
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    alert("Invalid Email!");
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
            <h2>Login</h2>
            <div>
                <p class="bg-white rounded mb-2 text-center">
                    <?php

                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                    } else {
                        echo $_SESSION['msg'] = "You are Successfully Logged Out! Please Log In again.";
                    }

                    ?>
                </p>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="useremail" required autocomplete="off" value="<?php if (isset($_COOKIE['emailcookie'])) {
                                                                                                                                                            echo $_COOKIE['emailcookie'];
                                                                                                                                                        } ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" data-toggle="password" placeholder="Enter password" name="userpswd" required value="<?php if (isset($_COOKIE['passcookie'])) {
                                                                                                                                                                        echo $_COOKIE['passcookie'];
                                                                                                                                                                    } ?>">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-dark" name="login">Log In</button>
                <br>
                <br>
                <a class="have" href="signup.php">Don't have an Account?</a>
                <br>
                <a class="have" href="recover_email.php">Forgot Password?</a>
            </form>
        </div>
    </header>
    <br>
    <br>
    <footer>
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