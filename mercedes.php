<?php
session_start();
include 'registration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands- Mercedes</title>
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
        <h4 id="rec1">&nbsp;&nbsp;&nbsp;Available Mercedes Cars: </h2>
            <div class="row" id="ads">
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2020</span>
                            <img class="img-fluid" src="./images/models/Mercedes/amg/mercedes_amg.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">76.70 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>Mercedes-Benz AMG GLC 43 Coupe</h5>
                            </div>
                            <a class="ad-btn" href="mercedes amg.php">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2019</span>
                            <img class="img-fluid" src="./images/models/Mercedes/c/mercedes_c.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">41.30 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>Mercedes-Benz C-Class</h5>
                            </div>
                            <a class="ad-btn" href="mercedes c.php">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2020</span>
                            <img class="img-fluid" src="./images/models/Mercedes/e/mercedes_e.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">59.93 Lakh</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>Mercedes-Benz E-Class</h5>
                            </div>
                            <a class="ad-btn" href="mercedes e.php">View</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card rounded">
                        <div class="card-image">
                            <span class="card-notify-year">2020</span>
                            <img class="img-fluid" src="./images/models/Mercedes/s/mercedes_s.jpg" alt="Alternate Text" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge">New</span>
                            <span class="card-detail-badge">1.38 Crore</span>
                        </div>
                        <div class="card-body text-center">
                            <div class="ad-title m-auto">
                                <h5>Mercedes-Benz S-Class</h5>
                            </div>
                            <a class="ad-btn" href="mercedes s.php">View</a>
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