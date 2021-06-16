<?php
session_start();
include 'registration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands- BMW</title>
    <link rel="stylesheet" href="style.css">
    <?php include "links.php" ?>
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
                echo '<li class="nav-item"><a class="nav-link" href="queryform.php"> Contact Us </a></li>';
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
                        <li class="nav-item"><a class="nav-link" href="queryform.php"> Contact Us </a></li>
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
        <h3 class="rec3">Coming Soon... </h3>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/audi_r8.jpg" alt="audi_r8">
                    <div class="carousel-caption">
                        <h3>Audi R8</h3>
                        <p>Elegance With Power.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/bmw_mx.jpg" alt="bmw_mx">
                    <div class="carousel-caption">
                        <h3>BMW Vision M</h3>
                        <p>The Future is Here!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/aventador.jpg" alt="aventador">
                    <div class="carousel-caption">
                        <h3>Lamborghini Aventador</h3>
                        <p>Unleash The Beast.</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
        <br>
        <br>
        <h4 id="rec1">&nbsp;&nbsp;&nbsp;Available BMW Cars: </h2>
            <div class="row" id="ads">
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2019</span>
                            <img class="img-fluid" src="./images/models/BMW/X3/bmw_x3.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">60.49 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>BMW X3</h5>
                            </div>
                            <a class="ad-btn" href="bmw x3.php">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2018</span>
                            <img class="img-fluid" src="./images/models/BMW/X1/bmw_x1.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">39.95 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>BMW X1</h5>
                            </div>
                            <a class="ad-btn" href="bmw x1.php">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2020</span>
                            <img class="img-fluid" src="./images/models/BMW/3/bmw_3.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">41.90 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>BMW 3 Series</h5>
                            </div>
                            <a class="ad-btn" href="bmw 3.php">View</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2020</span>
                            <img class="img-fluid" src="./images/models/BMW/Z4/bmw_Z4.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">65.99 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>BMW Z4</h5>
                            </div>
                            <a class="ad-btn" href="bmw z4.php">View</a>
                        </div>
                    </div>

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
</body>

</html>