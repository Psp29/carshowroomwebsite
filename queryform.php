<?php
session_start();
include 'registration.php';

mysqli_select_db($con, 'showroom');

if (isset($_POST['submit'])) {
    $cname = mysqli_real_escape_string($con, $_POST['cname']);
    $cno = $_POST['cno'];
    $cemail = $_POST['cemail'];
    $msg = $_POST['msg'];

    $msgquery = " select * from queryinfo where cname='$cname' and cno='$cno' and cemail='$cemail' and msg='$msg' ";
    $query = mysqli_query($con, $msgquery);
    $msgcount = mysqli_num_rows($query);
    if ($msgcount > 0) {
    } else {
        $addmsgquery = "insert into queryinfo (cname, cno, cemail, msg) values ('$cname', '$cno', '$cemail', '$msg')";
        if (mysqli_query($con, $addmsgquery)) {
?>

            <script>
                alert("Thanks for your Feedback");
            </script>
<?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <?php include "links.php";
    ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
            <?php

            if (isset($_SESSION['username'])) {
                echo '<div class="container">';
                echo '<a class="navbar-brand" href="index.php"><img class="logo" src="./images/logo.png" alt=""></a>';
                echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">';
                echo '<span class="navbar-toggler-icon"></span>';
                echo '</button>';
                echo '<div class="collapse navbar-collapse" id="main_nav">';
                echo '<ul class="navbar-nav">';
                echo '<li class="nav-item"> <a class="nav-link" href="indexlogin.php">Home </a> </li>';
                echo '<li class="nav-item"><a class="nav-link" href="brands.php"> Brands </a></li>';
                echo '<li class="nav-item active"><a class="nav-link" href="queryform.php"> Contact Us </a></li>';
                echo '</ul>';
                echo '<ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Welcome, ' . $_SESSION['username'] . '</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>';

                echo '</div>';
                echo '</div>';
            } else {
                echo '<div class="container">
                <a class="navbar-brand" href="index.php"><img class="logo" src="./images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="index.php">Home </a> </li>
                        <li class="nav-item"><a class="nav-link" href="brands.php"> Brands </a></li>
                        <li class="nav-item active"><a class="nav-link" href="queryform.php"> Contact Us </a></li>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Login/Register </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="signup.php">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>';
            }

            ?>

        </nav>
        <br>
        <br>
        <div class="container">
            <h2>Contact Us</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="cname">Name:</label>
                    <input type="text" class="form-control" id="cname" placeholder="Enter Name" name="cname" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cno">Mobile:</label>
                    <input type="text" class="form-control" id="cno" placeholder="Enter Mobile" name="cno" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="cemail">Email:</label>
                    <input type="email" class="form-control" id="cemail" placeholder="Enter email" name="cemail" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="msg">Message: </label>
                    <br>
                    <textarea class="form-control" rows="5" id="msg" placeholder="Any Questions/Message" required autocomplete="off" name="msg"></textarea>
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Submit</button>
            </form>
        </div>
    </header>
    <br>
    <br>
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
</body>

</html>